# UglifyJsWrapper
PHP wrapper for mishoo's UglifyJs

- Depends on node/npm to resolve dependencies and execute Uglify
- Versions follow the versions of the UglifyJS package

Following scripts have to be executed

```json
  "post-autoload-dump": [
       "cd vendor/mishoo/UglifyJS2 && npm install",
       "ln -sf `pwd`/vendor/mishoo/UglifyJS2/bin/uglifyjs `pwd`/vendor/jandc/uglify-js-wrapper/bin/uglifyjs",
       "chmod +x `pwd`/vendor/jandc/uglify-js-wrapper/bin/uglifyjs"
     ]
```


If you encounter difficulties resolving the javascript dependencies, add following custom repositories:

```json
"repositories": [
    {
      "type": "package",
      "package": {
        "name": "mishoo/UglifyJS2",
        "version": "2.4.24",
        "source": {
          "type": "git",
          "url": "https://github.com/mishoo/UglifyJS2",
          "reference": "tags/v2.4.24"
        }
      }
    }    
  ]
```
