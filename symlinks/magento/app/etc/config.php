<?php
return [
  'modules' => [
    'Magento_Store' => 1,
    'Magento_Eav' => 1,
    'Magento_Directory' => 1,
    'Magento_Config' => 1,
    'Magento_AdvancedPricingImportExport' => 1,
    'Magento_Backend' => 1,
    'Magento_Authorization' => 1,
    'Magento_Security' => 1,
    'Magento_Backup' => 1,
    'Magento_Customer' => 1,
    'Magento_BundleImportExport' => 1,
    'Magento_CacheInvalidate' => 1,
    'Magento_Indexer' => 1,
    'Magento_Theme' => 1,
    'Magento_User' => 1,
    'Magento_CatalogImportExport' => 1,
    'Magento_Cms' => 1,
    'Magento_Rule' => 1,
    'Magento_Catalog' => 1,
    'Magento_Search' => 1,
    'Magento_CatalogUrlRewrite' => 1,
    'Magento_Quote' => 1,
    'Magento_SalesSequence' => 1,
    'Magento_Payment' => 1,
    'Magento_CmsUrlRewrite' => 1,
    'Jalogut_Settings' => 1,
    'Magento_ConfigurableImportExport' => 1,
    'Magento_Msrp' => 1,
    'Magento_CatalogInventory' => 1,
    'Magento_Contact' => 1,
    'Magento_Cookie' => 1,
    'Magento_Cron' => 1,
    'Magento_Widget' => 1,
    'Magento_Sales' => 1,
    'Magento_Integration' => 1,
    'Magento_CustomerImportExport' => 1,
    'Magento_Deploy' => 1,
    'Magento_Developer' => 1,
    'Magento_Bundle' => 1,
    'Magento_Downloadable' => 1,
    'Magento_ImportExport' => 1,
    'Magento_Checkout' => 1,
    'Magento_Email' => 1,
    'Magento_EncryptionKey' => 1,
    'Magento_GiftMessage' => 1,
    'Magento_GoogleAnalytics' => 1,
    'Magento_Ui' => 1,
    'Magento_GroupedImportExport' => 1,
    'Magento_GroupedProduct' => 1,
    'Magento_DownloadableImportExport' => 1,
    'Magento_CatalogRule' => 1,
    'Magento_InstantPurchase' => 1,
    'Magento_Analytics' => 1,
    'Magento_LayeredNavigation' => 1,
    'Magento_MediaStorage' => 1,
    'Magento_ConfigurableProduct' => 1,
    'Magento_NewRelicReporting' => 1,
    'Magento_Newsletter' => 1,
    'Magento_OfflinePayments' => 1,
    'Magento_SalesRule' => 1,
    'Magento_PageCache' => 1,
    'Amazon_Core' => 1,
    'Magento_Vault' => 1,
    'Magento_ProductAlert' => 1,
    'Magento_ProductVideo' => 1,
    'Magento_CheckoutAgreements' => 1,
    'Magento_QuoteAnalytics' => 1,
    'Magento_Reports' => 1,
    'Magento_RequireJs' => 1,
    'Magento_Review' => 1,
    'Magento_ReviewAnalytics' => 1,
    'Magento_Robots' => 1,
    'Magento_Rss' => 1,
    'Magento_CatalogRuleConfigurable' => 1,
    'Magento_Captcha' => 1,
    'Magento_SalesAnalytics' => 1,
    'Magento_SalesInventory' => 1,
    'Magento_OfflineShipping' => 1,
    'Magento_ConfigurableProductSales' => 1,
    'Magento_CatalogSearch' => 1,
    'Magento_CustomerAnalytics' => 1,
    'Magento_Shipping' => 1,
    'Magento_Signifyd' => 1,
    'Magento_Sitemap' => 1,
    'Amazon_Login' => 1,
    'Magento_Swatches' => 1,
    'Magento_Tax' => 1,
    'Amazon_Payment' => 1,
    'Magento_Translation' => 1,
    'Magento_GoogleOptimizer' => 1,
    'Magento_UrlRewrite' => 1,
    'Magento_CatalogAnalytics' => 1,
    'Magento_Variable' => 1,
    'Magento_Paypal' => 1,
    'Magento_Webapi' => 1,
    'Magento_CurrencySymbol' => 1,
    'Magento_Wishlist' => 1,
    'Magento_WishlistAnalytics' => 1,
    'Shopial_Facebook' => 1
  ],
  'scopes' => [
    'websites' => [
      'admin' => [
        'website_id' => '0',
        'code' => 'admin',
        'name' => 'Admin',
        'sort_order' => '0',
        'default_group_id' => '0',
        'is_default' => '0'
      ],
      'base' => [
        'website_id' => '1',
        'code' => 'base',
        'name' => 'Main Website',
        'sort_order' => '0',
        'default_group_id' => '1',
        'is_default' => '1'
      ]
    ],
    'groups' => [
      [
        'group_id' => '0',
        'website_id' => '0',
        'code' => 'default',
        'name' => 'Default',
        'root_category_id' => '0',
        'default_store_id' => '0'
      ],
      [
        'group_id' => '1',
        'website_id' => '1',
        'code' => 'main_website_store',
        'name' => 'Main Website Store',
        'root_category_id' => '2',
        'default_store_id' => '1'
      ]
    ],
    'stores' => [
      'admin' => [
        'store_id' => '0',
        'code' => 'admin',
        'website_id' => '0',
        'group_id' => '0',
        'name' => 'Admin',
        'sort_order' => '0',
        'is_active' => '1'
      ],
      'default' => [
        'store_id' => '1',
        'code' => 'default',
        'website_id' => '1',
        'group_id' => '1',
        'name' => 'Default Store View',
        'sort_order' => '0',
        'is_active' => '1'
      ]
    ]
  ],
  'skipSystem' => [

  ],
  'themes' => [
    'frontend/Magento/blank' => [
      'parent_id' => NULL,
      'theme_path' => 'Magento/blank',
      'theme_title' => 'Magento Blank',
      'is_featured' => '0',
      'area' => 'frontend',
      'type' => '0',
      'code' => 'Magento/blank'
    ],
    'frontend/Magento/luma' => [
      'parent_id' => 'Magento/blank',
      'theme_path' => 'Magento/luma',
      'theme_title' => 'Magento Luma',
      'is_featured' => '0',
      'area' => 'frontend',
      'type' => '0',
      'code' => 'Magento/luma'
    ],
    'adminhtml/Magento/backend' => [
      'parent_id' => NULL,
      'theme_path' => 'Magento/backend',
      'theme_title' => 'Magento 2 backend',
      'is_featured' => '0',
      'area' => 'adminhtml',
      'type' => '0',
      'code' => 'Magento/backend'
    ]
  ],
  'i18n' => [

  ],
  'system' => [
    'default' => [
      'dev' => [
        'js' => [
          'merge_files' => '1',
          'enable_js_bundling' => '0',
          'minify_files' => '1'
        ],
        'css' => [
          'merge_css_files' => '0',
          'minify_files' => '0'
        ],
        'static' => [
          'sign' => '1'
        ]
      ]
    ]
  ]
];
