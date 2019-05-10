$(document).foundation();

$( document ).ready(function() {
    // Convert case
    $(".button").on("click", function(e) {
        $("#txtConvert").removeClass("copied");
        var txtInput = $("#txtConvert").val();

        if($(this).hasClass("btn-upperCase")) {
           $("#txtConvert").val(v.upperCase(txtInput));
           afterClick();
        }
        else if($(this).hasClass("btn-lowerCase")) {
           $("#txtConvert").val(v.lowerCase(txtInput));
           afterClick();
        }
        else if($(this).hasClass("btn-camelCase")) {
           $("#txtConvert").val(v.camelCase(txtInput));
           afterClick();
        }
        else if($(this).hasClass("btn-titleCase")) {
           $("#txtConvert").val(v.titleCase(txtInput));
           afterClick();
        }
        else if($(this).hasClass("btn-capitalize")) {
           $("#txtConvert").val(v.capitalize(txtInput));
           afterClick();
        }
        else if($(this).hasClass("btn-decapitalize")) {
           $("#txtConvert").val(v.decapitalize(txtInput));
           afterClick();
        }
        else if($(this).hasClass("btn-snakeCase")) {
           $("#txtConvert").val(v.snakeCase(txtInput));
           afterClick();
        }
        else if($(this).hasClass("btn-kebabCase")) {
           $("#txtConvert").val(v.kebabCase(txtInput));
           afterClick();
        }
        // HTML Strip tags
        else if($(this).hasClass("btn-stripTags")) {
           $("#txtConvert").val(v.stripTags(txtInput));
           afterClick();
        }
        // Remove white spaces
        else if($(this).hasClass("btn-trim")) {
           $("#txtConvert").val(v.trim(txtInput));
           afterClick();
        }
        // Escape html
        else if($(this).hasClass("btn-escapeHtml")) {
           $("#txtConvert").val(v.escapeHtml(txtInput));
           afterClick();
        }
        // unEscape html
        else if($(this).hasClass("btn-unescapeHtml")) {
           $("#txtConvert").val(v.unescapeHtml(txtInput));
           afterClick();
        }
    });

    // Text Counter
    $("#txtConvert").on("keyup", function(e) {
      var txtInput = $("#txtConvert").val();
      $(".c-count").text(v.count(txtInput));
      $(".w-count").text(v.countWords(txtInput));
    });
    //Copy to Clip Board
    $('.btn-copy').click(function() {
      $("#txtConvert").addClass("copied");
      $("#txtConvert").focus();
      $("#txtConvert").select();
      document.execCommand('copy');
    });

    function afterClick(){
      converted();
      setTimeout(removeconverted, 900);
    }

    function converted(){
        $("#txtConvert").addClass("converted");
    }
    function removeconverted(){
        $("#txtConvert").removeClass("converted");
    }

});
