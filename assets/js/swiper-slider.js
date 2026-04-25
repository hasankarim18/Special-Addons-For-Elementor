jQuery(window).on("elementor/frontend/init", function () {
  class PfSliderWidgetHandler extends elementorModules.frontend.handlers.Base {
    onInit() {
      this.initSwiper();
    }

    initSwiper() {
      const swiperEl = this.$element.find(".safe_pagination_fraction")[0];
      if (!swiperEl) return;

      // 🔥 Destroy previous instance (important)
      if (this.swiper) {
        this.swiper.destroy(true, true);
      }

      // destroy previous instance
      if (this.swiper) {
        this.swiper.destroy(true, true);
      }

      const settings = this.getElementSettings();

      this.swiper = new Swiper(swiperEl, {
        slidesPerView: settings.slides_per_view || 2,
        autoplay:
          settings.autoplay === "yes"
            ? {
                delay: 3000,
                disableOnInteraction: false,
              }
            : false,
        pagination: {
          el: this.$element.find(".swiper-pagination")[0],
          type: "fraction",
        },
        navigation: {
          nextEl: this.$element.find(".swiper-button-next")[0],
          prevEl: this.$element.find(".swiper-button-prev")[0],
        },
      });
    }

    // explain this on Element change code
    onElementChange(propertyName) {
      const reinitControls = ["slides_per_view", "autoplay"]; // what is this

      if (reinitControls.includes(propertyName)) {
        const settings = this.getElementSettings(); // is it required
        //   console.log(propertyName, settings[propertyName]); // dont want to console

        this.initSwiper();
      }
    }
  }

  elementorFrontend.hooks.addAction(
    "frontend/element_ready/safe_pagination_fraction.default",
    ($element) => {
      elementorFrontend.elementsHandler.addHandler(PfSliderWidgetHandler, {
        $element,
      });
    },
  );
});
