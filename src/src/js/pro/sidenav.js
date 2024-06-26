import PerfectScrollbar from '../mdb/perfect-scrollbar';
import { array, element, isVisible, typeCheckConfig, isRTL } from '../mdb/util/index';
import FocusTrap from '../mdb/util/focusTrap';
import { ENTER, TAB, ESCAPE } from '../mdb/util/keycodes';
import Touch from '../mdb/util/touch';
import Collapse from '../bootstrap/mdb-prefix/collapse';
import Data from '../mdb/dom/data';
import EventHandler from '../mdb/dom/event-handler';
import Manipulator from '../mdb/dom/manipulator';
import SelectorEngine from '../mdb/dom/selector-engine';
import Ripple from '../free/ripple';
import BaseComponent from '../free/base-component';
import { bindCallbackEventsIfNeeded } from '../autoinit/init';

/**
 * ------------------------------------------------------------------------
 * Constants
 * ------------------------------------------------------------------------
 */

const NAME = 'sidenav';
const DATA_KEY = 'mdb.sidenav';
const ARROW_CLASS = 'rotate-icon';
const BACKDROP_CLASS = 'sidenav-backdrop';
const SELECTOR_TOGGLE = '[data-mdb-toggle="sidenav"]';
const SELECTOR_TOGGLE_COLLAPSE = '[data-mdb-collapse-init]';
const SELECTOR_SHOW_SLIM = '[data-mdb-slim="true"]';
const SELECTOR_HIDE_SLIM = '[data-mdb-slim="false"]';
const SELECTOR_NAVIGATION = '.sidenav-menu';
const SELECTOR_COLLAPSE = '.sidenav-collapse';
const SELECTOR_LINK = '.sidenav-link';

const TRANSLATION_LEFT = isRTL ? 100 : -100;
const TRANSLATION_RIGHT = isRTL ? -100 : 100;

let instanceCount = 0;

const OPTIONS_TYPE = {
  accordion: '(boolean)',
  backdrop: '(boolean)',
  backdropClass: '(null|string)',
  closeOnEsc: '(boolean)',
  color: '(string)',
  content: '(null|string)',
  expandable: '(boolean)',
  expandOnHover: '(boolean)',
  focusTrap: '(boolean)',
  hidden: '(boolean)',
  mode: '(string)',
  scrollContainer: '(null|string)',
  slim: '(boolean)',
  slimCollapsed: '(boolean)',
  slimWidth: '(number)',
  position: '(string)',
  right: '(boolean)',
  transitionDuration: '(number)',
  width: '(number)',
};

const DEFAULT_OPTIONS = {
  accordion: false,
  backdrop: true,
  backdropClass: null,
  closeOnEsc: true,
  color: 'primary',
  content: null,
  expandable: true,
  expandOnHover: false,
  focusTrap: true,
  hidden: true,
  mode: 'over',
  scrollContainer: null,
  slim: false,
  slimCollapsed: false,
  slimWidth: 77,
  position: 'fixed',
  right: false,
  transitionDuration: 300,
  width: 240,
};

/**
 * ------------------------------------------------------------------------
 * Class Definition
 * ------------------------------------------------------------------------
 */

class Sidenav extends BaseComponent {
  constructor(node, options = {}) {
    super(node);

    this._options = options;

    instanceCount++;
    this._ID = instanceCount;

    this._backdrop = null;
    this._content = null;
    this._initialContentStyle = null;
    this._slimCollapsed = false;

    this._activeNode = null;

    this._tempSlim = false;

    this._focusTrap = null;
    this._perfectScrollbar = null;
    this._touch = null;

    this.escHandler = (e) => {
      if (e.keyCode === ESCAPE && this.toggler && isVisible(this.toggler)) {
        this._update(false);

        EventHandler.off(window, 'keydown', this.escHandler);
      }
    };

    this.hashHandler = () => {
      this._setActiveElements();
    };

    if (node) {
      this._setup();
    }
    Manipulator.setDataAttribute(this._element, `${this.constructor.NAME}-initialized`, true);
    bindCallbackEventsIfNeeded(this.constructor);
  }

  // Getters

  static get NAME() {
    return NAME;
  }

  get container() {
    if (this.options.position === 'fixed') {
      return SelectorEngine.findOne('body');
    }

    const findContainer = (el) => {
      if (!el.parentNode || el.parentNode === document) {
        return el;
      }
      const isRelative =
        el.parentNode.style.position === 'relative' ||
        el.parentNode.classList.contains('position-relative');
      if (isRelative) {
        return el.parentNode;
      }
      return findContainer(el.parentNode);
    };

    return findContainer(this._element);
  }

  get isVisible() {
    let containerStart = 0;
    let containerEnd = window.innerWidth;

    if (this.options.position !== 'fixed') {
      const boundry = this.container.getBoundingClientRect();
      containerStart = boundry.x;
      containerEnd = boundry.x + boundry.width;
    }

    const { x } = this._element.getBoundingClientRect();

    if ((this.options.right && !isRTL) || (!this.options.right && isRTL)) {
      let scrollBarWidth = 0;
      // check if there is scrollbar and account for it width if there is one
      if (this.container.scrollHeight > this.container.clientHeight) {
        scrollBarWidth = this.container.offsetWidth - this.container.clientWidth;
      }

      if (this.container.tagName === 'BODY') {
        const documentWidth = document.documentElement.clientWidth;
        scrollBarWidth = Math.abs(window.innerWidth - documentWidth);
      }

      return Math.abs(x + scrollBarWidth - containerEnd) > 10;
    }
    return Math.abs(x - containerStart) < 10;
  }

  get links() {
    return SelectorEngine.find(SELECTOR_LINK, this._element);
  }

  get navigation() {
    return SelectorEngine.find(SELECTOR_NAVIGATION, this._element);
  }

  get options() {
    const config = {
      ...DEFAULT_OPTIONS,
      ...Manipulator.getDataAttributes(this._element),
      ...this._options,
    };

    typeCheckConfig(NAME, config, OPTIONS_TYPE);

    return config;
  }

  get sidenavStyle() {
    return {
      width: `${this.width}px`,
      height: this.options.position === 'fixed' ? '100vh' : '100%',
      position: this.options.position,
      transitionDuration: this.transitionDuration,
      transitionProperty: 'transform, width, padding, margin',
      transitionTimingFunction: 'linear',
    };
  }

  get toggler() {
    const toggleElement = SelectorEngine.find(SELECTOR_TOGGLE).find((toggler) => {
      const target = Manipulator.getDataAttribute(toggler, 'target');
      return SelectorEngine.findOne(target) === this._element;
    });
    return toggleElement;
  }

  get transitionDuration() {
    return `${this.options.transitionDuration / 1000}s`;
  }

  get translation() {
    return this.options.right ? TRANSLATION_RIGHT : TRANSLATION_LEFT;
  }

  get width() {
    return this._slimCollapsed ? this.options.slimWidth : this.options.width;
  }

  // Public

  changeMode(mode) {
    this._setMode(mode);
  }

  dispose() {
    if (this._backdrop) {
      this._removeBackdrop();
    }

    EventHandler.off(window, 'keydown', this.escHandler);

    EventHandler.off(window, 'hashchange', this.hashHandler);

    this._touch.dispose();

    Data.removeData(this._element, DATA_KEY);
    Manipulator.removeDataAttribute(this._element, `${this.constructor.NAME}-initialized`);

    super.dispose();
  }

  hide() {
    this._setVisibility(false);
    this._update(false);
  }

  show() {
    this._setVisibility(true);
    this._update(true);
  }

  toggle() {
    this._setVisibility(!this.isVisible);
    this._update(!this.isVisible);
  }

  toggleSlim() {
    this._setSlim(!this._slimCollapsed);
  }

  update(options) {
    this._options = options;

    this._setup();
  }

  // Private

  _appendArrow(node) {
    const arrow = element('i');

    ['fas', 'fa-angle-down', ARROW_CLASS].forEach((className) => {
      Manipulator.addClass(arrow, className);
    });

    if (SelectorEngine.find(`.${ARROW_CLASS}`, node).length === 0) {
      node.appendChild(arrow);
    }
  }

  _collapseItems() {
    this.navigation.forEach((menu) => {
      const collapseElements = SelectorEngine.find(SELECTOR_COLLAPSE, menu);
      collapseElements.forEach((el) => {
        Collapse.getInstance(el).hide();
      });
    });
  }

  _setupBackdrop() {
    const classes = [];
    if (this.options.backdropClass) {
      classes.push(this.options.backdropClass);
    }
    const style = {
      transition: `opacity ${this.transitionDuration} ease-out`,
      position: this.options.position,
      width: this.options.position === 'fixed' ? '100vw' : '100%',
      height: this.options.position === 'fixed' ? '100vh' : '100%',
    };

    if (!this._backdrop) {
      const backdrop = element('div');

      classes.push(BACKDROP_CLASS);
      style.opacity = 0;

      EventHandler.on(backdrop, 'click', () => {
        this._setVisibility(false);
        this._update(false);
      });

      this._backdrop = backdrop;
    }

    this._backdrop.classList.add(...classes);

    Manipulator.style(this._backdrop, style);
  }

  _getOffsetValue(show, { index, property, offsets }) {
    const initialValue = this._getPxValue(
      this._initialContentStyle[index][offsets[property].property]
    );
    const offset = show ? offsets[property].value : 0;
    return initialValue + offset;
  }

  _getProperty(...args) {
    return args
      .map((arg, i) => {
        if (i === 0) {
          return arg;
        }
        return arg[0].toUpperCase().concat(arg.slice(1));
      })
      .join('');
  }

  _getPxValue(property) {
    if (!property) {
      return 0;
    }
    return parseFloat(property);
  }

  _handleSwipe(e, inverseDirecion) {
    if (inverseDirecion && this._slimCollapsed && this.options.slim && this.options.expandable) {
      this.toggleSlim();
    } else if (!inverseDirecion) {
      if (this._slimCollapsed || !this.options.slim || !this.options.expandable) {
        if (this.toggler && isVisible(this.toggler)) {
          this.toggle();
        }
      } else {
        this.toggleSlim();
      }
    }
  }

  _isActive(link, reference) {
    if (reference) {
      return reference === link;
    }

    if (link.attributes.href) {
      const trimmedLink = window.location.href.split(/#|\?/)[0];
      const strippedRequests = window.location.href.split('?')[0];
      return (
        new URL(link, window.location.href).href === trimmedLink ||
        new URL(link, window.location.href).href === strippedRequests
      );
    }

    return false;
  }

  _isAllToBeCollapsed() {
    const collapseElements = SelectorEngine.find(SELECTOR_TOGGLE_COLLAPSE, this._element);
    const collapseElementsExpanded = collapseElements.filter(
      (collapsible) => collapsible.getAttribute('aria-expanded') === 'true'
    );
    return collapseElementsExpanded.length === 0;
  }

  _isAllCollapsed() {
    return (
      SelectorEngine.find(SELECTOR_COLLAPSE, this._element).filter((el) => isVisible(el)).length ===
      0
    );
  }

  _setup() {
    // Touch events
    this._setupTouch();

    // Focus trap

    if (this.options.focusTrap) {
      this._setupFocusTrap();
    }

    // Backdrop

    if (this.options.backdrop) {
      this._setupBackdrop();

      if (!this.options.hidden && this.options.mode === 'over') {
        this._appendBackdrop();
      }
    }

    // Collapse

    this._setupCollapse();

    // Slim

    if (this.options.slimCollapsed) {
      Manipulator.addClass(this._element, 'sidenav-slim');
    }

    if (this.options.slim) {
      this._setupSlim();
    }

    // Initial position

    this._setupInitialStyling();

    // Perfect Scrollbar

    this._setupScrolling();

    // Content

    if (this.options.content) {
      this._setupContent();
    }

    // Active link

    this._setupActiveState();

    // Ripple

    this._setupRippleEffect();

    // Shown on init

    if (!this.options.hidden) {
      if (this.options.right) {
        this.show();
      }
      this._updateOffsets(true, true);
    }
  }

  _setupActiveState() {
    this._setActiveElements();

    this.links.forEach((link) => {
      EventHandler.on(link, 'click', () => this._setActiveElements(link));
      EventHandler.on(link, 'keydown', (e) => {
        if (e.keyCode === ENTER) {
          this._setActiveElements(link);
        }
      });
    });

    EventHandler.on(window, 'hashchange', this.hashHandler);
  }

  _setupCollapse() {
    this.navigation.forEach((menu, menuIndex) => {
      const categories = SelectorEngine.find(SELECTOR_COLLAPSE, menu);
      categories.forEach((list, index) =>
        this._setupCollapseList({ list, index, menu, menuIndex })
      );
    });
  }

  _generateCollpaseID(index, menuIndex) {
    return `sidenav-collapse-${this._ID}-${menuIndex}-${index}`;
  }

  _setupCollapseList({ list, index, menu, menuIndex }) {
    const ID = this._generateCollpaseID(index, menuIndex);

    list.classList.add('collapse');
    list.setAttribute('id', ID);

    const [toggler] = SelectorEngine.prev(list, SELECTOR_LINK);

    Manipulator.setDataAttribute(toggler, 'collapse-init', '');
    toggler.setAttribute('href', `#${ID}`);
    toggler.setAttribute('role', 'button');

    const instance =
      Collapse.getInstance(list) ||
      new Collapse(list, {
        toggle: false,
        parent: this.options.accordion ? menu : list,
      });

    // Arrow

    this._appendArrow(toggler);

    if (Manipulator.hasClass(list, 'show')) {
      this._rotateArrow(toggler, 180);
    }

    // Event listeners

    EventHandler.on(toggler, 'click', (e) => {
      this._toggleCategory(e, instance, list);
      if (this._tempSlim && this._isAllToBeCollapsed()) {
        this._setSlim(true);

        this._tempSlim = false;
      }

      if (this.options.mode === 'over' && this._focusTrap) {
        this._focusTrap.update();
      }
    });

    EventHandler.on(list, 'show.bs.collapse', () => this._rotateArrow(toggler, 180));

    EventHandler.on(list, 'hide.bs.collapse', () => this._rotateArrow(toggler, 0));

    EventHandler.on(list, 'shown.bs.collapse', () => {
      if (this.options.mode === 'over' && this._focusTrap) {
        this._focusTrap.update();
      }
    });

    EventHandler.on(list, 'hidden.bs.collapse', () => {
      if (this._tempSlim && this._isAllCollapsed()) {
        this._setSlim(true);

        this._tempSlim = false;
      }
      if (this.options.mode === 'over' && this._focusTrap) {
        this._focusTrap.update();
      }
    });
  }

  _setupContent() {
    this._content = SelectorEngine.find(this.options.content);
    if (!this._initialContentStyle) {
      this._initialContentStyle = this._content.map((el) => {
        const { paddingLeft, paddingRight, marginLeft, marginRight, transition } =
          window.getComputedStyle(el);
        return { paddingLeft, paddingRight, marginLeft, marginRight, transition };
      });
    }
  }

  _setupFocusTrap() {
    this._focusTrap = new FocusTrap(
      this._element,
      {
        event: 'keydown',
        condition: (e) => e.keyCode === TAB,
        onlyVisible: true,
      },
      this.toggler
    );
  }

  _setupInitialStyling() {
    this._setColor();
    Manipulator.style(this._element, this.sidenavStyle);
  }

  _setupScrolling() {
    let container = this._element;

    if (this.options.scrollContainer) {
      container = SelectorEngine.findOne(this.options.scrollContainer, this._element);

      const siblings = array(container.parentNode.children).filter((el) => el !== container);

      const siblingsHeight = siblings.reduce((a, b) => {
        return a + b.clientHeight;
      }, 0);

      Manipulator.style(container, {
        maxHeight: `calc(100% - ${siblingsHeight}px)`,
        position: 'relative',
      });
    }

    this._perfectScrollbar = new PerfectScrollbar(container, {
      suppressScrollX: true,
      handlers: ['click-rail', 'drag-thumb', 'wheel', 'touch'],
    });
  }

  _setupSlim() {
    this._slimCollapsed = this.options.slimCollapsed;

    this._toggleSlimDisplay(this._slimCollapsed);

    if (this.options.expandOnHover) {
      this._element.addEventListener('mouseenter', () => {
        if (this._slimCollapsed) {
          this._setSlim(false);
        }
      });

      this._element.addEventListener('mouseleave', () => {
        if (!this._slimCollapsed) {
          this._setSlim(true);
        }
      });
    }
  }

  _setupRippleEffect() {
    this.links.forEach((link) => {
      let wave = Ripple.getInstance(link);

      if (wave && wave._options.color !== this.options.color) {
        wave.dispose();
      } else if (wave) {
        return;
      }

      wave = new Ripple(link, { rippleColor: this.options.color });
    });
  }

  _setupTouch() {
    this._touch = new Touch(this._element, 'swipe', { threshold: 20 });
    this._touch.init();

    EventHandler.on(this._element, 'swipeleft', (e) => this._handleSwipe(e, this.options.right));

    EventHandler.on(this._element, 'swiperight', (e) => this._handleSwipe(e, !this.options.right));
  }

  _setActive(link, reference) {
    // Link
    Manipulator.addClass(link, 'active');

    if (this._activeNode) {
      this._activeNode.classList.remove('active');
    }
    this._activeNode = link;

    // Collapse

    const [collapse] = SelectorEngine.parents(this._activeNode, SELECTOR_COLLAPSE);

    if (!collapse) {
      this._setActiveCategory();
      return;
    }

    // Category

    const [category] = SelectorEngine.prev(collapse, SELECTOR_LINK);
    this._setActiveCategory(category);

    // Expand active collapse

    if (!reference && !this._slimCollapsed) {
      Collapse.getInstance(collapse).show();
    }
  }

  _setActiveCategory(el) {
    this.navigation.forEach((menu) => {
      const categories = SelectorEngine.find(SELECTOR_COLLAPSE, menu);

      categories.forEach((collapse) => {
        const [collapseToggler] = SelectorEngine.prev(collapse, SELECTOR_LINK);

        if (collapseToggler !== el) {
          collapseToggler.classList.remove('active');
        } else {
          Manipulator.addClass(collapseToggler, 'active');
        }
      });
    });
  }

  _setActiveElements(reference) {
    this.navigation.forEach((menu) => {
      const links = SelectorEngine.find(SELECTOR_LINK, menu);
      links
        .filter((link) => {
          return SelectorEngine.next(link, SELECTOR_COLLAPSE).length === 0;
        })
        .forEach((link) => {
          if (this._isActive(link, reference) && link !== this._activeNode) {
            this._setActive(link, reference);
          }
        });
    });
  }

  _setColor() {
    const colors = [
      'primary',
      'secondary',
      'success',
      'info',
      'warning',
      'danger',
      'light',
      'dark',
    ];
    const { color: optionColor } = this.options;
    const color = colors.includes(optionColor) ? optionColor : 'primary';

    colors.forEach((color) => {
      this._element.classList.remove(`sidenav-${color}`);
    });

    Manipulator.addClass(this._element, `sidenav-${color}`);
  }

  _setContentOffsets(show, offsets, initial) {
    this._content.forEach((el, i) => {
      const padding = this._getOffsetValue(show, { index: i, property: 'padding', offsets });
      const margin = this._getOffsetValue(show, { index: i, property: 'margin', offsets });

      const style = {};

      if (!initial) {
        style.transition = `all ${this.transitionDuration} linear`;
      }

      style[offsets.padding.property] = `${padding}px`;

      style[offsets.margin.property] = `${margin}px`;

      Manipulator.style(el, style);

      if (!show) {
        return;
      }

      if (initial) {
        Manipulator.style(el, { transition: this._initialContentStyle[i].transition });
        return;
      }

      EventHandler.on(el, 'transitionend', () => {
        Manipulator.style(el, { transition: this._initialContentStyle[i].transition });
      });
    });
  }

  _setMode(mode) {
    if (this.options.mode === mode) {
      return;
    }

    this._options.mode = mode;

    this._update(this.isVisible);
  }

  _setSlim(value) {
    const events = value ? ['collapse', 'collapsed'] : ['expand', 'expanded'];
    this._triggerEvents(...events);

    if (value) {
      this._collapseItems();
      Manipulator.addClass(this._element, 'sidenav-slim');
    } else {
      Manipulator.removeClass(this._element, 'sidenav-slim');
    }

    this._slimCollapsed = value;

    this._toggleSlimDisplay(value);

    Manipulator.style(this._element, { width: `${this.width}px` });

    this._updateOffsets(this.isVisible);
  }

  _setTabindex(value) {
    this.links.forEach((link) => {
      link.tabIndex = value ? 1 : -1;
    });
  }

  _setVisibility(show) {
    const events = show ? ['show', 'shown'] : ['hide', 'hidden'];

    this._triggerEvents(...events);
  }

  _rotateArrow(toggler, angle) {
    const [arrow] = SelectorEngine.children(toggler, `.${ARROW_CLASS}`);
    if (!arrow) {
      return;
    }
    Manipulator.style(arrow, {
      transform: `rotate(${angle}deg)`,
    });
  }

  async _toggleBackdrop(value) {
    if (value && this.options.mode === 'over') {
      this._appendBackdrop();
    } else {
      Manipulator.style(this._backdrop, { opacity: 0 });

      await setTimeout(() => {
        this._removeBackdrop();
      }, this.options.transitionDuration);
    }
  }

  _removeBackdrop() {
    if (this._backdrop.parentNode === this.container) {
      this.container.removeChild(this._backdrop);
    }
  }

  _appendBackdrop() {
    this.container.appendChild(this._backdrop);

    setTimeout(() => Manipulator.style(this._backdrop, { opacity: 1 }), 0);
  }

  _toggleCategory(e, instance) {
    e.preventDefault();

    instance.toggle();

    if (this._slimCollapsed && this.options.expandable) {
      this._tempSlim = true;

      this._setSlim(false);
    }
  }

  _toggleSlimDisplay(slim) {
    const slimCollapsedElements = SelectorEngine.find(SELECTOR_SHOW_SLIM, this._element);
    const fullWidthElements = SelectorEngine.find(SELECTOR_HIDE_SLIM, this._element);

    const toggleElements = () => {
      slimCollapsedElements.forEach((el) => {
        Manipulator.style(el, { display: this._slimCollapsed ? 'unset' : 'none' });
      });

      fullWidthElements.forEach((el) => {
        Manipulator.style(el, { display: this._slimCollapsed ? 'none' : 'unset' });
      });
    };

    if (slim) {
      setTimeout(() => toggleElements(true), this.options.transitionDuration);
    } else {
      toggleElements();
    }
  }

  async _triggerEvents(startEvent, completeEvent) {
    EventHandler.trigger(this._element, `${startEvent}.mdb.sidenav`);

    if (completeEvent) {
      await setTimeout(() => {
        EventHandler.trigger(this._element, `${completeEvent}.mdb.sidenav`);
      }, this.options.transitionDuration + 5);
    }
  }

  _update(show) {
    if (this.toggler) {
      this._updateTogglerAria(show);
    }

    this._updateDisplay(show);

    if (this.options.backdrop) {
      this._toggleBackdrop(show);
    }

    this._updateOffsets(show);

    if (show && this.options.closeOnEsc && this.options.mode !== 'side') {
      EventHandler.on(window, 'keydown', this.escHandler);
    }

    if (this.options.focusTrap) {
      this._updateFocus(show);
    }
  }

  _updateDisplay(value) {
    const translation = value ? 0 : this.translation;
    Manipulator.style(this._element, { transform: `translateX(${translation}%)` });
  }

  _updateFocus(show) {
    this._setTabindex(show);

    if (this.options.mode === 'over' && this.options.focusTrap) {
      if (show) {
        this._focusTrap.trap();
        return;
      }

      this._focusTrap.disable();
    }

    this._focusTrap.disable();
  }

  _updateOffsets(show, initial = false) {
    const [paddingPosition, marginPosition] =
      (this.options.right && !isRTL) || (!this.options.right && isRTL)
        ? ['right', 'left']
        : ['left', 'right'];

    const padding = {
      property: this._getProperty('padding', paddingPosition),
      value: this.options.mode === 'over' ? 0 : this.width,
    };

    const margin = {
      property: this._getProperty('margin', marginPosition),
      value: this.options.mode === 'push' ? -1 * this.width : 0,
    };

    EventHandler.trigger(this._element, 'update.mdb.sidenav', { margin, padding });

    if (!this._content) {
      return;
    }

    this._setContentOffsets(show, { padding, margin }, initial);
  }

  _updateTogglerAria(value) {
    this.toggler.setAttribute('aria-expanded', value);
  }

  // Static

  static toggleSidenav() {
    return function (e) {
      const toggler = SelectorEngine.closest(e.target, SELECTOR_TOGGLE);

      const elementSelector = Manipulator.getDataAttributes(toggler).target;

      SelectorEngine.find(elementSelector).forEach((element) => {
        const instance = Sidenav.getInstance(element) || new Sidenav(element);
        instance.toggle();
      });
    };
  }

  static jQueryInterface(config, options) {
    return this.each(function () {
      let data = Data.getData(this, DATA_KEY);
      const _config = typeof config === 'object' && config;

      if (!data && /dispose/.test(config)) {
        return;
      }

      if (!data) {
        data = new Sidenav(this, _config);
      }

      if (typeof config === 'string') {
        if (typeof data[config] === 'undefined') {
          throw new TypeError(`No method named "${config}"`);
        }

        data[config](options);
      }
    });
  }
}

export default Sidenav;
