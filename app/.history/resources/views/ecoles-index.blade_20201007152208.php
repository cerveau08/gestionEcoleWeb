<x-app-layout>
<x-slot name="header">
    
   </x-slot>

   <div class="py-12">
    class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
   <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
               @if (session()->has('message'))
                   <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
   <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                     <div class="flex">
   <div class="flex">
                       <div>
   <div>
                         <p class="text-sm">{{ session('message') }}</p>
   <p class="text-sm">{{ session('message') }}</p>
                       </div>
   </div>
                     </div>
   </div>
                   </div>
   </div>
               @endif
               <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Ecole</button>
   <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Ecole</button>
               <table class="table-fixed w-full">
   <table class="table-fixed w-full">
                   <thead>
   <thead>
                       <tr class="bg-gray-100">
                            <th class="px-4 py-2 w-20">No.</th>
                           <th class="px-4 py-2">Name</th>
                           <th class="px-4 py-2">Email</th>
                           <th class="px-4 py-2">Adresse</th>
                           <th class="px-4 py-2">Phone</th>
                           <th class="px-4 py-2">Description</th>
                           <th class="px-4 py-2">Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach($ecoles as $ecole)
                       <tr>
                           <td class="border px-4 py-2">{{ $ecole->id }}</td>
                           <td class="border px-4 py-2">{{ $ecole->name }}</td>
                           <td class="border px-4 py-2">{{ $ecole->email }}</td>
                           <td class="border px-4 py-2">{{ $ecole->adresse }}</td>
                           <td class="border px-4 py-2">{{ $ecole->phone }}</td>
                           <td class="border px-4 py-2">{{ $ecole->description }}</td>
                           <td class="border px-4 py-2">
                           <button wire:click="edit({{ $ecole->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                               <button wire:click="delete({{ $ecole->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                           </td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
           </div>
       </div>
   </div>
