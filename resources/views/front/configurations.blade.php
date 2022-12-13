 @extends('layouts.app')

 @inject('menus', 'App\Http\Controllers\HelpController' )

 @section('content')
     <section class="items-container">
         <div class="container">
             <div class="row">


                 <form action="{{ route('configurations.create') }}">
                     <button class="thm-btn style-2">Sincronizar menu</button>
                 </form>

             </div>
         </div>
         <div class="container_void"></div>
     </section>


 @endsection
