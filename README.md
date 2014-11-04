
#Cotya_StatisticsBase

a base module targeted at devs to implement tracking of various statistics over time




### Example usage

```php
    $now = strtotime('now');
    $numberOfActiveProducts = 0;
    
    $collection =  Mage::getModel('catalog/product')->getCollection();
    $collection->addAttributeToSelect('status');
    
    foreach( $collection as $product ){
        if($product->getStatus() == Mage_Catalog_Model_Product_Status::STATUS_ENABLED){
            $numberOfActiveProducts++;
        }
    }

    $entry = Mage::getModel('cotya_statisticsbase/entry');
    $entry->setType('my_example/number_of_active_products');
    $entry->setWhen($now);
    $entry->setValue($numberOfActiveProducts);
    $entry->save();
```


