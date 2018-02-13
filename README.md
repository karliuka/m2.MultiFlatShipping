# Magento2 MultiFlatShipping

[![Total Downloads](https://poser.pugx.org/faonni/module-shipping-multi-flat/downloads)](https://packagist.org/packages/faonni/module-shipping-multi-flat)
[![Latest Stable Version](https://poser.pugx.org/faonni/module-shipping-multi-flat/v/stable)](https://packagist.org/packages/faonni/module-shipping-multi-flat)	

MultiFlatShipping extension will create 5 flat rate shipping methods with different prices and conditions.

## Compatibility

Magento CE(EE) 2.0.x, 2.1.x, 2.2.x

## Install

#### Install via Composer (recommend)
The corresponding version of the MultiFlatShipping will be installed automatically.

1. Go to Magento2 root folder

2. Enter following commands to install module:

    ```bash
    composer require faonni/module-shipping-multi-flat
    ```
   Wait while dependencies are updated.
   
#### Manual Installation
   
1. Create a folder {Magento root}/app/code/Faonni/MultiFlatShipping

2. Download the corresponding [latest version](https://github.com/karliuka/m2.MultiFlatShipping/releases)

3. Copy the unzip content to the folder ({Magento root}/app/code/Faonni/MultiFlatShipping)

4. Install [Smart Category Configurable](https://github.com/karliuka/m2.SmartCategoryConfigurable)

### Completion of installation

1. Go to Magento2 root folder

2. Enter following commands:

    ```bash
	php bin/magento setup:upgrade
	php bin/magento setup:di:compile
	php bin/magento setup:static-content:deploy  (optional)

### Configuration

In the Magento Admin Panel go to *Stores > Configuration > Sales > Shipping Methods*.

<img alt="Magento2 MultiFlatShipping" src="https://karliuka.github.io/m2/multiflatshipping/flatrate.png" style="width:100%"/>

## Uninstall
This works only with modules defined as Composer packages.

#### Remove database data

1. Go to Magento2 root folder

2. Enter following commands to remove database data:

    ```bash
    php bin/magento module:uninstall -r Faonni_MultiFlatShipping
  
#### Remove Extension
    
1. Go to Magento2 root folder

2. Enter following commands to remove:

    ```bash
    composer remove faonni/module-shipping-multi-flat
    ```

### Completion of uninstall

1. Go to Magento2 root folder

2. Enter following commands:

    ```bash
	php bin/magento setup:upgrade
	php bin/magento setup:di:compile
	php bin/magento setup:static-content:deploy  (optional)
