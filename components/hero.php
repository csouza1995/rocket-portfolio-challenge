<section id="hero" class="py-36">
    <div class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-center">
        <div class="text-center">
            <!-- picture -->
            <div class="rounded-full w-32 h-32 border-red-400 border-4 mx-auto">
                <img src="assets/img/me.png" alt="Carlos Souza" class="w-full h-full object-cover rounded-full p-1">
            </div>

            <!-- pre-title  -->
            <p class="text-center text-lg mt-20 font-inconsolata">
                <?php if ($language === 'pt-br') : ?>
                    Hello World! Eu sou <span class="text-red-400 font-bold">Carlos Souza</span> e sou um
                <?php else : ?>
                    Hello World! I'm <span class="text-red-400 font-bold">Carlos Souza</span> and I'm a
                <?php endif; ?>
            </p>

            <!-- title -->
            <h1 class="text-center text-5xl font-bold mt-2">
                Full Stack Developer
            </h1>

            <!-- description -->
            <p class="text-center text-sm mt-10 w-2/3 mx-auto text-gray-300">
                Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da
                minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.
            </p>

            <!-- tags -->
            <div class="mt-20 space-x-1 font-inconsolata font-bold">
                <span class="bg-lime-400 rounded-full px-4 py-2 text-gray-950">GitHub</span>
                <span class="bg-purple-400 rounded-full px-4 py-2 text-gray-950">PHP</span>
                <span class="bg-sky-400 rounded-full px-4 py-2 text-gray-950">CSS</span>
                <span class="bg-red-400 rounded-full px-4 py-2 text-gray-950">HTML</span>
                <span class="bg-yellow-400 rounded-full px-4 py-2 text-gray-950">Javascript</span>
            </div>
        </div>
    </div>
</section>