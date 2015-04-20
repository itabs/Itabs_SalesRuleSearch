Itabs_SalesRuleSearch
=====================

Allows admin users to search sales rules by coupon code.

Facts
-----
- Version: 1.0.0
- [extension on GitHub](https://github.com/itabs/Itabs_SalesRuleSearch)

Description
-----------

Having a Magento Store with many sales rules and (often) thousands of auto-generated coupon codes, it is very hard
to find the corresponding sales rule for a coupon code, e.g. if the coupon can't be applied and you have to look why.

This module provides a little search box below the salesrule grid and automatically opens the edit form of the
corresponding salesrule if a matching salesrule is found for the entered coupon code.

Compatibility
-------------
- Magento CE >= 1.7

Installation Instructions
-------------------------

#### Manually
- Clone the repository or download the latest version of this extension.
- Copy all the files from the **src** folder into your Magento document root

#### Via modman

- Install [modman](https://github.com/colinmollenhour/modman) on your system
- Run the following command in your Magento document root:

`modman clone https://github.com/itabs/Itabs_SalesRuleSearch.git`

#### Via composer
- Install [composer](http://getcomposer.org/download/) on your system
- Install [Magento Composer](https://github.com/magento-hackathon/magento-composer-installer) or any other Magento composer installer.
- Create a composer.json into your project like the following sample:

```json
{
    "require": {
        "itabs/salesrulesearch":"*"
    },
    "repositories": [
	    {
            "type": "composer",
            "url": "http://packages.firegento.com"
        }
    ],
    "extra":{
        "magento-root-dir": "htdocs/"
    }
}
```

- From your `composer.json` folder run `php composer.phar install` or `composer install`

#### Final steps
- Clear the cache, logout from the admin panel and then log back in
- You can now use this module in *Promotions -> Shopping Cart Price Rules*

Uninstallation
--------------
- Remove all extension files from your Magento installation:

```
app/code/community/Itabs/SalesRuleSearch
app/etc/modules/Itabs_SalesRuleSearch.xml
app/design/adminhtml/default/default/layout/itabs_salesrulesearch.xml
app/design/adminhtml/default/default/template/itabs/salesrulesearch
app/locale/de_DE/Itabs_SalesRuleSearch.csv
```

- Via modman: `modman remove Itabs_SalesRuleSearch`
* Via composer, remove the requirement of `itabs/salesrulesearch`

Support
-------
If you have any issues with this extension, open an issue on [GitHub](https://github.com/itabs/Itabs_SalesRuleSearch/issues).

Contribution
------------
Any contribution is highly appreciated. The best way to contribute code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

Developer
---------
Rouven Alexander Rieker / ITABS GmbH
- [http://www.itabs.de](http://www.itabs.de)
- [@therouv](https://twitter.com/therouv)
- [@itabs_gmbh](https://twitter.com/itabs_gmbh)

License
-------
[MIT](http://opensource.org/licenses/MIT) - For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
