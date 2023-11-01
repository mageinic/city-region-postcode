# City Region Drop-down User Guide

## 1. How to install

### Method 1: Install ready-to-paste package

- Download the latest version at [City Region Drop-down for Magento 2](https://www.mageinic.com/city-region-drop-down.html)

### Method 2: Install via composer [Recommend]

Run the following command in Magento 2 root folder

```
composer require mageinic/cityregionpostcode

php bin/magento maintenance:enable
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento maintenance:disable
php bin/magento cache:flush
```

## 2. How to use

- Please refer to the `CityRegionPostcode Extension User Guide.pdf` file for instructions on how to use the extension.

## 3. Get Support

- Feel free to [contact us](https://www.mageinic.com/contact.html) if you have any further questions.
- Like this project, Give us a **Star**