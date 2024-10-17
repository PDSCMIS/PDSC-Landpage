# References

## Initializing Your Project

1. Create your `index.html`

    - Inside it initialize your boilerplate structure with the `!` mark
    - Then name your page `<title>`
    - Add your `link:favicon` below it
    - Then a `link` to your `"./css/style.css"` custom stylesheet below it

2. Fonts

    - If you have custom fonts, paste it inside the `<head>` tag right after your `favicon`

3. Libraries

    - If you have are using a library like bootstrap download the it from [getbootstrap.com/](https://getbootstrap.com/) and extract the css and js folder to your project
    - Add a `link` to `"./css/bootstrap.css"` right above your custom stylesheet below it
    - Then add a `script:src` to `"./js/bootstrap.bundle.js"` right before the closing `</body>` tag

4. Create your `#regions` in the `<body>` for easy organization

5. Initialized Project HTML Sample:

    ```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Bootstrap Training | Home</title>
      <link rel="shortcut icon" href="./img/bootstrap-logo.svg" type="image/x-icon">

      <!-- Google Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="./css/bootstrap.css">
      <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <!-- #region Header -->
        <header>
            
            <!-- #region Primary Navigation -->
            
            <!-- #endregion Primary Navigation -->

        </header>
        <!-- #endregion Header -->

        <!-- #region Main -->
        <main>

            <!-- #region Slider -->
            <div>
      
            </div>
            <!-- #endregion Slider -->

            <!-- #region Hero -->
            <section>

            </section>
            <!-- #endregion Hero -->
    
        </main>
        <!-- #endregion Main -->

        <!-- #region Footer -->
        <footer>

        </footer>
        <!-- #endregion Footer -->
      
        <script src="./js/bootstrap.bundle.js"></script>
    </body>
    </html>
    ```

## Common Shortcuts
- Double <kbd>Click 🖱</kbd>  = Select Word
- Triple <kbd>Click 🖱</kbd> = Select Line
- <kbd>SHIFT</kbd> + <kbd>Click 🖱</kbd> = List Select
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + Click = Multi Select
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + A = Select All
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + C = Copy
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + X = Cut
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + V = Paste
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + Z = Undo
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + Y = Redo
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + S = Save

## Chrome Shortcuts more
- <kbd>F5</kbd> = Refresh
- <kbd>Scroll 🖱 Click</kbd> = Close Tab more
- <kbd>CTRL</kbd> + <kbd>U</kbd> = View Source
- <kbd>CTRL</kbd> + <kbd>SHIFT</kbd> + <kbd>I</kbd> = Open Chrome Dev Tools
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>SHIFT</kbd> + <kbd>C</kbd> = Inspect Element more
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>SHIFT</kbd> + <kbd>M</kbd> (On Dev Tool Window) = Responsive View
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>SHIFT</kbd> + <kbd>T</kbd> = Restore Chrome Tabs

## ⊞ Windows Shortcuts
- <kbd>⊞ Win</kbd> + <kbd>.</kbd> / <kbd>;</kbd> = Emoji Keyboard
- <kbd>⊞ Win</kbd> + <kbd>SHIFT</kbd> + <kbd>S</kbd> = Screenshot

## 🍎 Mac Shortcuts
- <kbd>CTRL</kbd> + <kbd>CMD</kbd> + <kbd>SPACE</kbd> = Emoji Keyboard
- <kbd>SHIFT</kbd> + <kbd>CMD</kbd> + <kbd>4</kbd> = Screenshot

## Font Awesome 5 Link Tag
Paste this code inside the `<head>` tag

```html
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
```
## VS Code Shortcuts
- <kbd>Scroll 🖱 Click</kbd> = Open in New Tab / Close Tab

- <kbd>ALT</kbd> / <kbd>OPTIONS</kbd> + <kbd>Scroll 🖱 Click</kbd> = Open Tab in Another Column
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>SHIFT</kbd> + <kbd>V</kbd> = Open Markdown Preview
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>B</kbd> = Toggle Sidebar Visibility
- <kbd>ALT</kbd> / <kbd>OPTIONS</kbd> + <kbd>Z</kbd> = Toggle Wordwrap
- <kbd>SHIFT</kbd> + <kbd>ALT</kbd> / <kbd>OPTIONS</kbd> + <kbd>A</kbd> = Insert a Comment
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>/</kbd> = Comment Line or Selection
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>SPACE</kbd> = Trigger Suggest
- <kbd>ALT</kbd> / <kbd>OPTIONS</kbd> + <kbd>D</kbd> = Duplicate Selection
- <kbd>SHIFT</kbd> + <kbd>ALT</kbd> / <kbd>OPTIONS</kbd> + <kbd>↑</kbd> / <kbd>↓</kbd> = Duplicate Line ↑/↓
- <kbd>ALT</kbd> / <kbd>OPTIONS</kbd> + <kbd>E</kbd> = Move Cursor to Line End
- <kbd>ALT</kbd> / <kbd>OPTIONS</kbd> + <kbd>SHIFT</kbd> + <kbd>E</kbd> = Select up to Line End
- <kbd>ALT</kbd> / <kbd>OPTIONS</kbd> + <kbd>S</kbd> = Move Cursor to Line Start
- <kbd>ALT</kbd> / <kbd>OPTIONS</kbd> + <kbd>SHIFT</kbd> + <kbd>S</kbd> = Select up to Line Start
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>ENTER</kbd> = Insert After Line
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>SHIFT</kbd> + <kbd>ENTER</kbd> = Insert Before Line
- <kbd>ALT</kbd> / <kbd>OPTIONS</kbd> + <kbd>↑</kbd> / <kbd>↓</kbd> = Move Line ↑/↓
- <kbd>CTRL</kbd> + <kbd>+</kbd> / <kbd>-</kbd> = Zoom In / Out
- <kbd>CTRL</kbd> + <kbd>0</kbd> = Reset Zoom Level
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>🖱 Click</kbd> Line = Multiline Edit
- <kbd>SHIFT</kbd> + <kbd>ALT</kbd> / <kbd>OPTIONS</kbd> + <kbd>🖱 Click</kbd> and Drag = Multiline Edit Selection ↑/↓
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>]</kbd> = Indent Line
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>[</kbd> = Unindent Line
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>L</kbd> = Selects the Entire Line
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>SHIFT</kbd> + <kbd>K</kbd> = Delete Entire Line
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>ALT</kbd> / <kbd>OPTIONS</kbd> + <kbd>↑</kbd> / <kbd>↓</kbd> = Increment / Decrement by 0.1
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>↑</kbd> / <kbd>↓</kbd> = Increment / Decrement by 1
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>SHIFT</kbd> + <kbd>↑</kbd> / <kbd>↓</kbd> = Increment / Decrement by 10
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>D</kbd> = Find and Highlight The Next Selected Word
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>SPACE</kbd> = Trigger Suggest
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>SHIFT</kbd> + <kbd>A</kbd> = Select Inside Tags
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>SHIFT</kbd> + <kbd>SPACE</kbd> = Expand Selection
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>SHIFT</kbd> + <kbd>P</kbd> = Command Pallete
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>K</kbd>, <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>8</kbd> = Fold Marker Regions
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>K</kbd>, <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>9</kbd> = Unfold Marker Regions
- <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>K</kbd>, <kbd>CTRL</kbd> / <kbd>CMD</kbd> + <kbd>I</kbd> = Show Hover    

## Installing Extensions
    Extensions > Install "Live Server" by Ritwick Dey
    Extensions > Install "Text Pastry" by jkjustjoshingh
    Extensions > Install "Cobalt2" by Wes Bos
    Extensions > Install "Inline Fold" by Mohammed Alamri

## Recommended Sites
- [Paste Pics                                 ](https://paste.pics/)
- [Emmet Cheat Sheet                          ](https://docs.emmet.io/cheat-sheet/)
- [Creating a Fluid Type Scale with CSS Clamp ](https://www.aleksandrhovhannisyan.com/blog/fluid-type-scale-with-css-clamp/)
- [Fluid Type Scale Calculator                ](https://utopia.fyi/type/calculator/)
- [PX to REM converter                        ](https://nekocalc.com/px-to-rem-converter)
- [PX to EM converter                         ](https://nekocalc.com/px-to-em-converter)
- [Flexbox Froggy                             ](https://flexboxfroggy.com/)
- [Grid Garden                                ](https://cssgridgarden.com/)
- [Smooth Shadow                              ](https://shadows.brumm.af/)
- [Cubic-Bezier                               ](https://cubic-bezier.com/)
- [Angry Tools                                ](https://angrytools.com/css/animation/)
- [Buy Now: Sample HTML button code           ](https://developer.paypal.com/api/nvp-soap/paypal-payments-standard/integration-guide/html-example-buy-now/#link-abasicbuynowbutton)
- [Font Awesome 5                             ](https://fontawesome.com/v5.15/icons?d=gallery&p=2)
- [Flat Icons                                 ](https://www.flaticon.com/)
- [Google Fonts                               ](https://fonts.google.com/)
- [Mixfont Generator                          ](https://www.mixfont.com/)
- [Coolors                                    ](https://coolors.co/)
- [Flat UI Colors                             ](https://flatuicolors.com/)
- [Freepik                                    ](https://www.freepik.com/)
- [Pixabay                                    ](https://pixabay.com/)
- [Unsplash                                   ](https://unsplash.com/)
- [Pexels                                     ](https://www.pexels.com/)
- [UI Faces                                   ](https://uifaces.co/)
- [Picsum.Photos | //unsplash.it              ](https://picsum.photos/)
- [Clippy                                     ](https://bennettfeely.com/clippy/)
- [Bootstrap 5                                ](https://getbootstrap.com/docs/5.0/getting-started/introduction/)
- [Bootstrap 5 CheatSheet                     ](https://bootstrap-cheatsheet.themeselection.com/)
- [Dokimos - Good Example of what not to do   ](http://dokimos.org/main.html)
- [Decraroofs.eu - Good Example of what to do ](https://www.decraroofs.eu/en/)
- [HTML Validator                             ](https://validator.w3.org/)
- [CSS Validator                              ](https://jigsaw.w3.org/css-validator/)
- [Can I Use                                  ](https://caniuse.com/)
- [AutoPrefixer                               ](https://autoprefixer.github.io/)
- [Mozilla Developer Network                  ](https://developer.mozilla.org/en-US/)
- [OWL Carousel                               ](https://owlcarousel2.github.io/OwlCarousel2/)
- [Frontend Mentor                            ](https://www.frontendmentor.io/)
- [Adobe XD                                   ](https://www.adobe.com/products/xd.html)
- [Github                                     ](https://github.com/)
- [Netlify                                    ](https://www.netlify.com/)
- [Bootstrap Studio                           ](https://bootstrapstudio.io/)
- [MD Reader                                  ](https://chrome.google.com/webstore/detail/md-reader/medapdbncneneejhbgcjceippjlfkmkg)


## VS Code Configuration For Convenience
Open the command pallete via: <kbd>CTRL</kbd> + <kbd>SHIFT</kbd> + <kbd>P</kbd> <br>
Then Search for ```"Preferences: Open User Settings (JSON)"``` <br>
Copy and Past the code below there.
```json
{
  "liveServer.settings.donotShowInfoMsg": true,
  "explorer.confirmDelete": false,
  "liveServer.settings.donotVerifyTags": true,
  "liveServer.settings.mount": [],
  "security.workspace.trust.untrustedFiles": "open",
  "explorer.confirmDragAndDrop": false,
  "files.maxMemoryForLargeFilesMB": 8192,
  "editor.multiCursorModifier": "ctrlCmd",
  "editor.linkedEditing": true,
  "liveServer.settings.host": "localhost",
  "liveServer.settings.port": 80,
  "editor.tabSize": 2,
  "debug.disassemblyView.showSourceCode": false,
  "liveServer.settings.ChromeDebuggingAttachment": false,
  "liveServer.settings.AdvanceCustomBrowserCmdLine": "",
  "git.enableSmartCommit": true,
  "editor.minimap.size": "fit",
  "diffEditor.ignoreTrimWhitespace": false,
  "files.autoSave": "onFocusChange",
}
```

## VS Code Custom Keyboard Shortcuts
Open the command pallete via: <kbd>CTRL</kbd> + <kbd>SHIFT</kbd> + <kbd>P</kbd> <br>
Then Search for ```"Preferences: Open Keyboard Shortcuts (JSON)"``` <br>
Copy and Past the code below there.
```json
[
    {
        "key": "ctrl+shift+a",
        "command": "editor.emmet.action.balanceOut"
    },
    {
        "key": "ctrl+shift+space",
        "command": "-editor.action.triggerParameterHints",
        "when": "editorHasSignatureHelpProvider && editorTextFocus"
    },
    {
        "key": "ctrl+alt+a",
        "command": "editor.emmet.action.wrapWithAbbreviation"
    },
    {
        "key": "ctrl+shift+space",
        "command": "editor.action.smartSelect.expand",
        "when": "editorTextFocus"
    },
    {
        "key": "shift+alt+right",
        "command": "-editor.action.smartSelect.expand",
        "when": "editorTextFocus"
    },
    {
        "key": "alt+d",
        "command": "editor.action.duplicateSelection"
    },
    {
        "key": "alt+e",
        "command": "cursorEnd",
        "when": "textInputFocus"
    },
    {
        "key": "end",
        "command": "-cursorEnd",
        "when": "textInputFocus"
    },
    {
        "key": "alt+s",
        "command": "cursorHome",
        "when": "textInputFocus"
    },
    {
        "key": "home",
        "command": "-cursorHome",
        "when": "textInputFocus"
    },
    {
        "key": "ctrl+up",
        "command": "editor.emmet.action.incrementNumberByOne"
    },
    {
        "key": "ctrl+down",
        "command": "editor.emmet.action.decrementNumberByOne"
    },
    {
        "key": "ctrl+alt+down",
        "command": "editor.emmet.action.decrementNumberByOneTenth"
    },
    {
        "key": "ctrl+alt+up",
        "command": "editor.emmet.action.incrementNumberByOneTenth"
    },
    {
        "key": "ctrl+shift+down",
        "command": "editor.emmet.action.decrementNumberByTen"
    },
    {
        "key": "ctrl+shift+up",
        "command": "editor.emmet.action.incrementNumberByTen"
    },
    {
        "key": "shift+alt+e",
        "command": "cursorEndSelect",
        "when": "textInputFocus"
    },
    {
        "key": "shift+end",
        "command": "-cursorEndSelect",
        "when": "textInputFocus"
    },
    {
        "key": "shift+alt+s",
        "command": "cursorHomeSelect",
        "when": "textInputFocus"
    },
    {
        "key": "shift+home",
        "command": "-cursorHomeSelect",
        "when": "textInputFocus"
    },
    {
        "key": "ctrl+k ctrl+backspace",
        "command": "workbench.action.closeFolder",
        "when": "emptyWorkspaceSupport && workbenchState != 'empty'"
    },
    {
        "key": "ctrl+k f",
        "command": "-workbench.action.closeFolder",
        "when": "emptyWorkspaceSupport && workbenchState != 'empty'"
    },
    {
        "key": "ctrl+shift+win+n",
        "command": "explorer.newFile"
    },
    {
        "key": "ctrl+alt+l",
        "command": "workbench.debug.panel.action.clearReplAction"
    }
]
```