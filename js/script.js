( function( $ ) {
      $(document).on("click", ".cmb-radio-image", function() {
        $(this).closest(".cmb-type-radio-image").find(".cmb-radio-image").removeClass("cmb-radio-image-selected");
        $(this).toggleClass("cmb-radio-image-selected");
      });
} )( jQuery );
