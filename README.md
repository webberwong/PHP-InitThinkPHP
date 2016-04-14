初始化ThinkPHP3.2项目
==========================
方便自己的代码,初始化ThinkPHP项目<br>
虽然composer可以require加入Thinkphp框架,但是将Thinkphp框架的代码都在放在根目录,个人使用了composer,总有个洁癖,总想把引入的库都统一放在一个文件里,所以自定了个源,将Thinkphp3.2.3版本的代码重置了.


### 关于Thinkphp的包源
url 源为一个可以下载到的thinkphp框架的zip代码包
```js
"repositories" : [
    	{
    		"type" : "package",
    		"package" : {
    			"name" : "thinkphp/thinkphp",
    			"version" : "3.2.3",
    			"dist" : {
    				"url" : "http://www.test.com/resource/php/thinkphp-3.2.3.zip",
    				"type" : "zip"
    			}
    		}
    	}
]
```

### 使用
git clone 也行<br>
复制该composer的代码也行<br>
只要机器有composer,install下即可
```
composer install
```
