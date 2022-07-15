<?php 
include('header.php')
?>
<html class="scroll-smooth" >
<body class="font-bold ">

    <div id="home" class=" h-screen w-full bg-[url(img/saul-goodman1.jpg)] bg-no-repeat bg-cover flex justify-center items-end ">
        <a href="#contact" class="bg-yellow-300 rounded-xl mb-40 text-red-600 p-6  h-fit font-bold text-6xl hover:text-7xl transition-all ease-in-out duration-700">Contact</a>
    </div>

    <div class=" container h-screen w-full  flex flex-row-reverse justify-evenly items-center text-4xl">

        <div class="bg-yellow-50 p-10 mr-10 gap-5 flex flex-col rounded-xl border-4 border-black">
            <h1 class="text-5xl text-red-600">About Me</h1>
            <p class="text-yellow-300">When I met you in the summer To my heartbeat's sound We fell in love As the leaves turned brown And we could be together, baby As long as skies are blue You act so innocent now But you lied so soon</p>
        </div>
        
        <img src="img/saulgoodman.png" class="mx-10">

    </div>


    <div class=" container h-screen w-full bg-[url(img/saul3.jpg)] flex flex-row justify-around items-center ">
        <div class="flex justify-center text-6xl flex-col items-start rounded-xl bg-yellow-50 h-1/2 border-4 border-black p-5 gap-5">
            <h1 class="text-red-600 text-7xl">Clients</h1>
            <p class="text-yellow-300">The opinion of my clients.</p>
        </div>

        <div class="flex justify-center items-center text-6xl">
            <a href="clients.php" class="bg-yellow-300 text-red-600 p-6 rounded-xl transition-all ease-in-out duration-700 hover:text-[4rem]">Click Here!</a>
        </div>
    </div>

    <div id="contact" class=" container w-full h-screen bg-[url(img/saul4.jpg)] bg-cover bg-no-repeat flex flex-col justify-center items-center text-9xl">
        <h1 class="text-yellow-300">Better call <span class="text-red-600">Saul!</span></h1>
        <h1 class="text-white text-8xl">505-842-5662</h1>
    </div>
</body>
</html>