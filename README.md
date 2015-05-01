MATA CMS Content Block
==========================================

![MATA CMS Module](https://s3-eu-west-1.amazonaws.com/qi-interactive/assets/mata-cms/gear-mata-logo%402x.png?X-Amz-Date=20150501T104949Z&X-Amz-Expires=300&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Signature=391e66dd013015a340c359952865c17f403be588c0092bfc05f2b329874c767b&X-Amz-Credential=ASIAIYUC55RNOWMVXRHQ/20150501/eu-west-1/s3/aws4_request&X-Amz-SignedHeaders=Host&x-amz-security-token=AQoDYXdzEHQakAJeVPWGZDIMtDo9B3r4e3dITlOfLgX5Pd5mYADeErt/vK9MtnvBJA5VbEoF01DKk48jn3qNJARt%2BpJvHerZ5D87F3pyPf7KK5zzOo93zVt3I6CRaSBTiYNeRjv39V8O8r0ULwsF426hUy20IE90sqFXZB54z7mUn33JnZ6Mid4HpCLdJdR0hRmqLbRpSQUj1eFSdHqF2HEJ22luvCeB9fCiL%2BchZqwR1OsEsIx8lUHaf7UAHlftXNaRkOVhv08xHLvoBRTB%2B%2BZBArLVM6lcAi4PlSykwb0ba41bgawSAE27Fodd6HysCYY/ogpeRhb4U3/YD7j8MzMcPvaqUIInd22ahvzDoYl8MmnYeCZ%2BgPPXECCRtI2qBQ%3D%3D)


Content Block module allows adding blocks of HTML code into a web page. 


Installation
------------

Add the module using composer: 

```json
"matacms/matacms-content-block": "~1.0.0"
```


Client
------

Content Block Client extends [`matacms\clients`](https://github.com/qi-interactive/matacms-base/blob/development/clients/SimpleClient.php). 

In addition, it exposes the following methods: 

```php
public function getText($region) {}
```
Returns ContentBlock::Text for a given region. If the model is not found, and ContentBlockClient::safeMode is set to false an exception will be thrown. Otherwise an 'HttpException' will be thrown.


```php
public function renderText($region) {}
```
Echoes the result of ContentBlockClient::renderText($region).


```php
public function renderTextWithoutOuterParagraph($region) {}
```
Echoes the result of ContentBlockClient::renderText($region). It also removes the outer paragraph of tags which are usually added by Imperavi Redactor.


Changelog
---------

## 1.0.0-alpha, May 1, 2015

- Initial release.
