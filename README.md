# composer-learn
用于学习composer的用法

# 步骤
1. 到packagist中查找此项目(考察如何确定包名称)
2. 使用create-project安装1.1.0版，阅读除vendor文件夹、composer.lock、隐藏文件外的所有文件内容
3. 新增站点，站点根目录为composer-learn/public，端口为8008，使http://localhost:8008/index.php可以访问
4. 设置composer.json中的autoload使http://localhost:8008/functions.php可以正常访问，hello_world函数位于src/helpers.php中
5. 设置composer.json中的autoload使http://localhost:8008/exceptions.php可以正常抛出异常，ComposerLearn\ExceptionOne类位于src/Exceptions.php中
6. 设置composer.json中的autoload使http://localhost:8008/people.php可以正常访问(psr-4)，ComposerLearn\People类位于src/People.php中
7. 在项目根目录下运行git checkout 1.2.0，使http://localhost:8008/people.php可以正常访问
8. 在项目根目录下运行git checkout 1.3.0，安装最新的stable版本的brandonwamboldt/utilphp，使http://localhost:8008/utils.php可以正常访问

# 参考文献
1. [composer dump-autoload](https://getcomposer.org/doc/03-cli.md#dump-autoload)
2. [composer validate](https://getcomposer.org/doc/03-cli.md#validate)
