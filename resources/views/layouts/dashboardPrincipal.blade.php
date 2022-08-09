@extends('layouts.template.plantilla')

@section('title','Dashboard de departamentos')

@section('content')
<!-- BARRA DE BUSQUEDA-->
<div class="pt-2 relative mx-auto text-gray-600">
    <div class="form-now">
        <input name="searchBar" class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
        type="search" name="search" placeholder="Search">
        <button id="delete-btn" type="submit" class="absolute right-0 top-0 mt-5 mr-4">
            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                width="512px" height="512px">
                    <path
                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
        </button>
    </div>
    <div class="absolute inset-0 hidden justify-center items-center" id="overlay">
        <div class="bg-gray-200 max-w-sm py-2 px-3 rounded shadow-xl text-gray-800">
            <div class="flex justify-between items-center">
                <h4 class="text-lg font-bold">Confirm Delete?</h4>
                <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full" id="close-modal" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="mt-2 text-sm">
                <p>La busqueda es {{$searchBar}}</p>
            </div>
            <div class="mt-3 flex justify-end space-x-3">
                <button class="px-3 py-1 rounded hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900" id="close-modal">Cancel</button>
                <button class="px-3 py-1 bg-red-800 text-gray-200 hover:bg-red-600 rounded" id="close-modal">Delete</button>
            </div>
        </div>
      </div>
      
      <script>
        window.addEventListener('DOMContentLoaded', () =>{
            const overlay = document.querySelector('#overlay')
            const delBtn = document.querySelector('#delete-btn')
            const closeBtn = document.querySelector('#close-modal')
      
            const toggleModal = () => {
                overlay.classList.toggle('hidden')
                overlay.classList.toggle('flex')
            }
      
            delBtn.addEventListener('click', toggleModal)
      
            closeBtn.addEventListener('click', toggleModal)
        })
      
      </script>
</div>
@endsection