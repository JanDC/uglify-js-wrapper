# UglifyJsWrapper
PHP wrapper for mishoo's UglifyJs

- Depends on node/npm to resolve dependencies and execute Uglify
- Versions follow the versions of the UglifyJS package


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
    },
    {
      "type": "package",
      "package": {
        "name": "gijsroge/priority-navigation",
        "version": "1.0.9",
        "source": {
          "type": "git",
          "url": "https://github.com/gijsroge/priority-navigation",
          "reference": "1.0.9"
        }
      }
    }
  ],
```
