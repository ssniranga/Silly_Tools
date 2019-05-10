<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include "_head.php" ?>
    <title>Convert Text Case - Convert upper case to lower case, lower case to upper case and many more options!</title>

    <meta name="description" content="Simple tool to convert your text to any case such as upper case to lower case, lower case to upper case, camel case, title case, snake case and kebab case" />
    <meta name="keywords" content="convert case, convert case online, uppercase to lowercase, lowercase to upper, text tool, text converter, silly tools" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <link rel="icon" href="images/icon-clipboard.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="images/icon-clipboard.svg" type="image/x-icon" />

  </head>
  <body>

    <?php include "_nav.php" ?>

    <div class="grid-container">

      <div class="grid-x grid-padding-x grid-padding-y">

          <?php include "_ad.php" ?>

        <div class="large-12 cell text-center">
          <h1 class="text-center">Convert Text Case</h1>
          <h3> Simple tool to convert your text to any case</h3>
        </div>


      </div>

      <div class="grid-x grid-padding-x">
        <div class="large-12 medium-12 cell">
          <form>
            <div class="grid-x grid-padding-x">
              <div class="large-12 cell text-converter-container">
                <label class="center">Simply enter your text and choose the case you want to convert it to.</label>
                <div class="container-txt">
                  <textarea name="txtConvert" id="txtConvert" placeholder="Type/Paste your text here.." required></textarea>
                  <a href="#" class="btn-copy" data-tooltip title="Copy to Clipboard"><img src="images/icon-clipboard.svg" alt="Copy to Clipboard"></a>

                </div>

                <div class="callout btns-container">
                    <div class="columns"><a href="#" class="button btn-upperCase">UPPERCASE</a></div>
                    <div class="columns"><a href="#" class="button btn-lowerCase">lowercase</a></div>
                    <div class="columns"><a href="#" class="button btn-camelCase">camelCase</a></div>
                    <div class="columns"><a href="#" class="button btn-titleCase">Title Case</a></div>
                    <div class="columns"><a href="#" class="button btn-capitalize">Capitalize</a></div>
                    <div class="columns"><a href="#" class="button btn-decapitalize">decapitalize</a></div>
                    <div class="columns"><a href="#" class="button btn-snakeCase">snake_case</a></div>
                    <div class="columns"><a href="#" class="button btn-kebabCase">kebab-case</a></div>
                </div>
                <div class="callout counter"><span>Character Count: <span class="c-count">0</span> | Word Count: <span class="w-count">0</span> </span></div>

              </div>
            </div>
          </form>
        </div>

      </div>
    </div>

    <?php include "_footer.php" ?>

  </body>
</html>
