# Table
laravel package designed to generate html tables


# Add Service Provider

  'Joseomar94\Table\TableServiceProvider',

# Add Aliases

  'Table' => Joseomar94\Table\Facades\TableFacade::class,
  
# Use

  {!! Table::table($users,['name','email'],['Name','Email Address']) !!}
