<?php

include_once 'Publications.php';
$publications = new Publication();
$list = $publications->getAll();
include 'Componenets/header.php';
?>
<div class="w-full">
    <nav class="bg-white shadow-lg">
        <div class="md:flex items-center justify-between py-2 px-8 md:px-12">
            <div class="flex justify-between items-center">
               <div class="text-2xl font-bold text-gray-800 md:text-3xl">
                    <a href="#">Brand</a>
               </div>
                <div class="md:hidden">
                    <button type="button" class="block text-gray-800 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path class="hidden" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/>
                            <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row hidden md:block -mx-2">
                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Home</a>
                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">About</a>
                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Contact</a>
            </div>
        </div>
    </nav>
<div class="min-h-screen bg-gray-200 flex justify-center items-center flex-col">
   <!-- Start of component -->
   <?php foreach ($list as $row):?>
   <div class="max-w-2xl bg-white border-2 border-gray-300 p-5 rounded-md tracking-wide shadow-lg " style="position: relative;min-width: 500px;">
      <div id="header" class="flex"> 
         <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
         <div id="body" class="flex flex-col ml-5" >
            <h4 id="name" class="text-xl font-semibold mb-2"><?= $row['id']?></h4>
            <p id="job" class="text-gray-800 mt-2"><?= $row['titre']?></p>
            <div class="flex mt-5">
               <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
               <p class="ml-3">John Doe</p>
            </div>
            <a href="Post.php?id=<?= $row['id']?>">
                <button class="bg-black hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" style="position: absolute; right: 10px; bottom:10px;">
                    see more
                </button>
            </a>
         </div>
      </div>
   </div>
   <?php endforeach;?>
   <!-- End of component -->
</div>