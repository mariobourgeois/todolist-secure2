<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todolist secure</title>
</head>


    <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
	<div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
        <div class="mb-4">
            
           
        <div class="container">



    <!-- Action -->
    <form action="/listeDeTaches/edit/{{$tache->id}}" method="post" class="add">
      @csrf
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"
          ><span class="oi oi-pencil"></span
        ></span>
        <input value="{{$tache->nomTache}}"
          id="nomTache"
          name="tache"
          type="text"
          class="form-control"
          placeholder="Ajouter une tache"
          aria-label="My new idea"
          aria-describedby="basic-addon1"
        />
        <input 
        type='submit'
        name='envoyer' >
      </div>
    </form>

    <!-- Liste -->
    
  </div>
</div>
</div>
     

    </div>
 </div> 



 @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
        @endif