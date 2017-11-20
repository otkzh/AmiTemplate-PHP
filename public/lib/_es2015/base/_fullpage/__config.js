/************************
fullPage.js
site: https://github.com/alvarotrigo/fullPage.js
npm:https://www.npmjs.com/package/fullpage.js

---

※scrollOverflow機能をtrueにしたい場合の注意事項。
fullpage.jsのimport利用時、IScrollとの依存関係が正しく読み込まれない。対策として、IScrollをグローバルスコープに設定すること。
↓
例：wenpack
new webpack.ProvidePlugin({
IScroll: "fullpage.js/vendors/scrolloverflow.min"
})

ただし、他のiScrollを利用したプラグインとの共存ができなくなるので注意。
現在「iScroll」使用中のプラグインリスト↓
- drawer

***********************/

//node_module
import 'fullpage.js'
import 'fullpage.js/dist/jquery.fullpage.css';

//original-css
import './__style.scss';

//export
export default function(){

  $(function() {
    $('#fullpage').fullpage({

      //Custom selectors
      sectionSelector: '.main__item',
      slideSelector: '.main__slide',

      //Navigation
      menu: '#menu',
      lockAnchors: false,
      anchors:['fpItem__1', 'fpItem__2'],
      navigation: true,
      navigationPosition: 'right',
      navigationTooltips: ['firstSlide', 'secondSlide'],
      showActiveTooltip: false,
      slidesNavigation: true,
      slidesNavPosition: 'bottom',

      //Scrolling
      css3: true,
      scrollingSpeed: 700,
      autoScrolling: true,
      fitToSection: true,
      fitToSectionDelay: 1000,
      scrollBar: false,
      easing: 'easeInOutCubic',
      easingcss3: 'ease',
      loopBottom: false,
      loopTop: false,
      loopHorizontal: true,
      continuousVertical: false,
      continuousHorizontal: false,
      scrollHorizontally: false,
      interlockedSlides: false,
      dragAndMove: false,
      offsetSections: false,
      resetSliders: false,
      fadingEffect: false,
      normalScrollElements: '#element1, .element2',
      scrollOverflow: false, // ページ上部の注意事項参照
      scrollOverflowReset: false,
      scrollOverflowOptions: null,
      touchSensitivity: 15,
      normalScrollElementTouchThreshold: 5,
      bigSectionsDestination: null,

      //Accessibility
      keyboardScrolling: true,
      animateAnchor: true,
      recordHistory: true,

      //Design
      controlArrows: true,
      verticalCentered: true,
      sectionsColor: ['#7BAABE', '#4BBFC3', '#7BAABE', 'whitesmoke', '#000'],
      paddingTop: '0px',
      paddingBottom: '0px',
      fixedElements: '#header, .footer',
      responsiveWidth: 0,
      responsiveHeight: 0,
      responsiveSlides: false,
      parallax: false,
      parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

      lazyLoading: true,

      //events
      onLeave: function(index, nextIndex, direction){

      },
      afterLoad: function(anchorLink, index){

      },
      afterRender: function(){

      },
      afterResize: function(){

      },
      afterResponsive: function(isResponsive){

      },
      afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){

      },
      onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){


      }
    });
  });
};
