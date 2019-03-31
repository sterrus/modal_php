<?php

$mapping = array(
    'AmoCRM\ModelException' => __DIR__ . '/AmoCRM/ModelException.php',
    'AmoCRM\Models\Widgets' => __DIR__ . '/AmoCRM/Models/Widgets.php',
    'AmoCRM\Models\Transaction' => __DIR__ . '/AmoCRM/Models/Transaction.php',
    'AmoCRM\Models\Catalog' => __DIR__ . '/AmoCRM/Models/Catalog.php',
    'AmoCRM\Models\Unsorted' => __DIR__ . '/AmoCRM/Models/Unsorted.php',
    'AmoCRM\Models\Note' => __DIR__ . '/AmoCRM/Models/Note.php',
    'AmoCRM\Models\Webhooks' => __DIR__ . '/AmoCRM/Models/Webhooks.php',
    'AmoCRM\Models\Traits\SetNote' => __DIR__ . '/AmoCRM/Models/Traits/SetNote.php',
    'AmoCRM\Models\Traits\SetTags' => __DIR__ . '/AmoCRM/Models/Traits/SetTags.php',
    'AmoCRM\Models\Traits\SetLinkedLeadsId' => __DIR__ . '/AmoCRM/Models/Traits/SetLinkedLeadsId.php',
    'AmoCRM\Models\Traits\SetNextDate' => __DIR__ . '/AmoCRM/Models/Traits/SetNextDate.php',
    'AmoCRM\Models\Traits\SetDateCreate' => __DIR__ . '/AmoCRM/Models/Traits/SetDateCreate.php',
    'AmoCRM\Models\Traits\SetDate' => __DIR__ . '/AmoCRM/Models/Traits/SetDate.php',
    'AmoCRM\Models\Traits\SetLastModified' => __DIR__ . '/AmoCRM/Models/Traits/SetLastModified.php',
    'AmoCRM\Models\AbstractModel' => __DIR__ . '/AmoCRM/Models/AbstractModel.php',
    'AmoCRM\Models\Account' => __DIR__ . '/AmoCRM/Models/Account.php',
    'AmoCRM\Models\CatalogElement' => __DIR__ . '/AmoCRM/Models/CatalogElement.php',
    'AmoCRM\Models\Task' => __DIR__ . '/AmoCRM/Models/Task.php',
    'AmoCRM\Models\Contact' => __DIR__ . '/AmoCRM/Models/Contact.php',
    'AmoCRM\Models\Customer' => __DIR__ . '/AmoCRM/Models/Customer.php',
    'AmoCRM\Models\Company' => __DIR__ . '/AmoCRM/Models/Company.php',
    'AmoCRM\Models\ModelInterface' => __DIR__ . '/AmoCRM/Models/ModelInterface.php',
    'AmoCRM\Models\Call' => __DIR__ . '/AmoCRM/Models/Call.php',
    'AmoCRM\Models\CustomersPeriods' => __DIR__ . '/AmoCRM/Models/CustomersPeriods.php',
    'AmoCRM\Models\CustomField' => __DIR__ . '/AmoCRM/Models/CustomField.php',
    'AmoCRM\Models\Lead' => __DIR__ . '/AmoCRM/Models/Lead.php',
    'AmoCRM\Models\Links' => __DIR__ . '/AmoCRM/Models/Links.php',
    'AmoCRM\Models\Pipelines' => __DIR__ . '/AmoCRM/Models/Pipelines.php',
    'AmoCRM\NetworkException' => __DIR__ . '/AmoCRM/NetworkException.php',
    'AmoCRM\Request\CurlHandle' => __DIR__ . '/AmoCRM/Request/CurlHandle.php',
    'AmoCRM\Request\Request' => __DIR__ . '/AmoCRM/Request/Request.php',
    'AmoCRM\Request\ParamsBag' => __DIR__ . '/AmoCRM/Request/ParamsBag.php',
    'AmoCRM\Webhooks\Listener' => __DIR__ . '/AmoCRM/Webhooks/Listener.php',
    'AmoCRM\Exception' => __DIR__ . '/AmoCRM/Exception.php',
    'AmoCRM\Helpers\Fields' => __DIR__ . '/AmoCRM/Helpers/Fields.php',
    'AmoCRM\Helpers\B2BFamily' => __DIR__ . '/AmoCRM/Helpers/B2BFamily.php',
    'AmoCRM\Helpers\B2BFamilyException' => __DIR__ . '/AmoCRM/Helpers/B2BFamilyException.php',
    'AmoCRM\Helpers\Format' => __DIR__ . '/AmoCRM/Helpers/Format.php',
    'AmoCRM\Client' => __DIR__ . '/AmoCRM/Client.php',
);

spl_autoload_register(function ($class) use ($mapping) {
    if (isset($mapping[$class])) {
        require $mapping[$class];
    }
}, true);

