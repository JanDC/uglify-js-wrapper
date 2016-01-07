# UglifyJsWrapper
PHP wrapper for mishoo's UglifyJs

- Depends on node/npm to resolve dependencies and execute Uglify
- Versions follow the versions of the UglifyJS package

Following scripts have to be executed

```json
  "post-autoload-dump": [
       "chmod +x `pwd`/vendor/jandc/uglify-js-wrapper/bin/uglifyjs"
     ]
```
