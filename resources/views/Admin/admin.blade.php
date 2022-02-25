@auth
 <x-app-layout>

 </x-app-layout>
@endauth

<!DOCTYPE html>
<html lang="en">
  @include('Admin.admincss')
  <body>
@include('Admin.navbar')

@include('Admin.body')

@include('Admin.adminjs')
  </body>
</html>
