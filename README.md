# Magento2 MultiFlatShipping
MultiFlatShipping extension will create 5 flat rate shipping methods with different prices and conditions.

<img alt="Magento2 MultiFlatShipping" src="https://karliuka.github.io/m2/multiflatshipping/flatrate.png" style="width:100%"/>
## Install with Composer as you go

1. Go to Magento2 root folder

2. Enter following commands to install module:

    ```bash
    composer require faonni/module-multiflatshipping
    ```
   Wait while dependencies are updated.

3. Enter following commands to enable module:

    ```bash
	php bin/magento setup:upgrade
	php bin/magento setup:static-content:deploy
    ```
