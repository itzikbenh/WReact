# WordPress starter theme with React.js integrated.
This theme pretty much includes only a way to compile your assets with React code. 
It's meant for you to learn React inside WordPress, or to create your own theme.
It includes an example component. 
I'm using Gulp+Webpack to compile the assets. Gulp handles the CSS and running Webpack, while Webpack handles JS. 

There are packages you would probably want to use such as Redux/Mobx. I would leave them for you to install. 

Clone the theme, run ```npm install``` and start playing. 

Make sure to modify the BrowserSync proxy link inside the gulpfile.js. 

## Commands
1. ``` gulp ``` Will compile, start BrowserSync and watch for any changes.
2. ``` gulp production ``` Will compile and minify assets. 

## React devtools
Download it [here](https://chrome.google.com/webstore/detail/react-developer-tools/fmkadmapgofadopljbjfkapdkoienihi?hl=en)
