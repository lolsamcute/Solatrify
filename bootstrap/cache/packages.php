<?php return array (
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'gloudemans/shoppingcart' => 
  array (
    'providers' => 
    array (
      0 => 'Gloudemans\\Shoppingcart\\ShoppingcartServiceProvider',
    ),
    'aliases' => 
    array (
      'Cart' => 'Gloudemans\\Shoppingcart\\Facades\\Cart',
    ),
  ),
  'infyomlabs/adminlte-templates' => 
  array (
    'providers' => 
    array (
      0 => '\\InfyOm\\AdminLTETemplates\\AdminLTETemplatesServiceProvider',
    ),
  ),
  'infyomlabs/laravel-generator' => 
  array (
    'providers' => 
    array (
      0 => '\\InfyOm\\Generator\\InfyOmGeneratorServiceProvider',
    ),
  ),
  'laracasts/flash' => 
  array (
    'providers' => 
    array (
      0 => 'Laracasts\\Flash\\FlashServiceProvider',
    ),
    'aliases' => 
    array (
      'Flash' => 'Laracasts\\Flash\\Flash',
    ),
  ),
  'laravel/passport' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Passport\\PassportServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'laravelcollective/html' => 
  array (
    'providers' => 
    array (
      0 => 'Collective\\Html\\HtmlServiceProvider',
    ),
    'aliases' => 
    array (
      'Form' => 'Collective\\Html\\FormFacade',
      'Html' => 'Collective\\Html\\HtmlFacade',
    ),
  ),
  'nunomaduro/collision' => 
  array (
    'providers' => 
    array (
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
  'prettus/l5-repository' => 
  array (
    'providers' => 
    array (
      0 => 'Prettus\\Repository\\Providers\\RepositoryServiceProvider',
    ),
  ),
  'werneckbh/laravel-qr-code' => 
  array (
    'providers' => 
    array (
      0 => 'LaravelQRCode\\Providers\\QRCodeServiceProvider',
    ),
    'aliases' => 
    array (
      'QRCode' => 'LaravelQRCode\\Facades\\QRCode',
    ),
  ),
);