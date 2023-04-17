@extends('layouts.app')
@section('content')


<div class="hero-bg-image flex flex-col items-center justify-center ">
    <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10 text-center">Welcome to my blog</h1>
    <a href="" class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl">Start Reading</a>
</div>
<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
    <div class="mx-2 md:mx-0">
        <img class="sm:rounded-lg" src="https://picsum.photos/id/239/960/620" alt="">
    </div>
    <div class="flex flex-col items-left justify-center m-10 sm:m-0">
        <h2 class="font-bold text-gray-700 text-4xl uppercase">How to be an expert in 2023</h2>
        <p class="font-bold text-gray-600 text-xl pt-2 "> you can find a list of all programming language here</p>
        <p class="py-4 text-gray-500 text-sm leading ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente distinctio, repudiandae facilis eveniet nostrum veniam aliquid soluta, in nemo tempora reiciendis totam sit ipsum sequi natus cupiditate iure, quod rerum!</p>
        <a href="/" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Read More</a>

    </div>

</div>
<div class="text-center p-15 bg-gray-700 text-gray-100">
    <h2 class="text-2xl">Blogs Categories</h2>
    <div class="container mx-auto pt-10 sm:grid grid-cols-4">
        <div class="font-bold text-2xl py-2">Ux Design</div>
        <div class="font-bold text-2xl py-2">Programming</div>
        <div class="font-bold text-2xl py-2">Graphic</div>
        <div class="font-bold text-2xl py-2">Front-End</div>
    </div>
</div>
<div class="container mx-auto text-center py-15">
    <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
<p class="text-gray-400 leading-6 px-10">Le Post peut également prendre la signification de billet dans le cas d’un blog dans le domaine du marketing de contenu. En l’occurrence, un texte qui a pour objectif de donner une information. Pour de nombreuses entreprises, la publication de Post sur leur blog leur permet de nombreux avantages. Par exemple, il s’agit d’un moyen de gagner en visibilité, notamment par le procédé su SEO. Mais aussi, un Billet de blog ou Post est une méthode pour certaines entreprises de s’entretenir avec leur client. Les Posts contenus dans le blog présentent généralement un formulaire permettant au lecteur de donner son avis concernant le contenu du Post.
    Dans le cas d’un forum, les Posts permettent également à une entreprise ou une organisation d’interagir avec son audience. À la manière d’un réseau social, les cibles, les prospects ou les clients d’un groupe peuvent donner leur opinion concernant le contenu du Post, poser des questions, écrire des témoignages, etc. Les Posts constituent donc un moyen pour une marque d’être plus proche de son audience et d’améliorer la connexion émotionnelle avec celle-ci.
    </p>
</div>
<div class="sm:grid grid-cols-2 w-4/5 mx-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="block m-auto pt-4 pb-15 w-4/5">
<ul class="md:flex text-x5 gap-2">
    <li class="bg-yellow-100 text-yellow-700  p-2 rounded inline-blok my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition"><a href="">php </a></li>
    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-blok my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition"><a href="">Programming </a></li>
    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-blok my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition"><a href="">Language </a></li>
    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-blok my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition  "><a href="">Backend</a></li>
</ul>



<h3 class="text-l py-10 leading-6">Le PHP, pour Hypertext Preprocessor, désigne un langage informatique, ou un langage de script, utilisé principalement pour la conception de sites web dynamiques. Il s'agit d'un langage de programmation sous licence libre qui peut donc être utilisé par n'importe qui de façon totalement gratuite.</h3>
<a href="" class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">Read More</a>

        </div>

    </div>
    <div class="flex">
        <img  src="https://picsum.photos/id/242/960/620" alt="">
    </div>

</div>
@endsection
 