<template>
    <section>
        <footer class="bg-black">
            <div class="mx-auto w-full custom-maxWidth p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="" class="flex items-center justify-center--mobile">
                           <img src="../../src/images/Column.png" class="w-52 h-full" alt="Logo Hugo Hoch">
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap--custom sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-xl font-semibold text-white text-mobile--center">Menu</h2>
                            <div class="border-b border-white"></div>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium pt-8 text-mobile--center">
                                <li class="mb-4 ">
                                    <router-link to="/servicos"  class="footer-title--custom  hover:underline">Serviços</router-link>
                                </li>
                                <li class="mb-4">
                                    <a href="/#sobre" class="footer-title--custom hover:underline">Sobre</a>
                                </li>
                                <li class="mb-4">
                                    <router-link to="/contato"  class="footer-title--custom hover:underline">Contato</router-link>
                                </li>
                                <li>
                                    <router-link to="/blog"  class="footer-title--custom hover:underline">Blog</router-link>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-xl font-semibold text-white text-mobile--center">Contato</h2>
                            <div class="border-b border-white"></div>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium pt-8 text-mobile--center">
                                <li class="mb-4">
                                    <a href="https://wa.me/5514982073282" target="_blank" class="footer-title--custom hover:underline">+55 (14) 98207-3282</a>
                                </li>
                                <li class="mb-4">
                                    <a href="mailto:hugo.hoch@metadevendas.com.br" class="footer-title--custom hover:underline">hugo.hoch@metadevendas.com.br</a>
                                </li>

                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-xl font-semibold text-white text-mobile--center">Redes</h2>
                            <div class="border-b border-white"></div>
                            <ul class="flex text-gray-500 dark:text-gray-400 font-medium pt-8 gap-4 text-mobile--center justify-center--mobile">
                                <li>
                                    <a href="https://www.linkedin.com/in/hugohoch/"  target="_blank" class="hover:underline hover:scale-110 hover:opacity-50">
                                        <svg width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.5" y="1.11719" width="33.9999" height="33.9999" stroke="white"/>
                                            <path d="M13.4737 25.2103V15.7558H10.334V25.2103H13.4741H13.4737ZM11.9045 14.4652C12.9992 14.4652 13.6807 13.7392 13.6807 12.8319C13.6602 11.904 12.9992 11.1982 11.9253 11.1982C10.8508 11.1982 10.1489 11.904 10.1489 12.8318C10.1489 13.7391 10.8302 14.4651 11.8839 14.4651H11.9043L11.9045 14.4652ZM15.2116 25.2103H18.3511V19.9311C18.3511 19.6489 18.3716 19.3659 18.4545 19.1644C18.6814 18.5996 19.198 18.0149 20.0655 18.0149C21.2013 18.0149 21.656 18.8819 21.656 20.153V25.2103H24.7954V19.7894C24.7954 16.8855 23.2467 15.5342 21.181 15.5342C19.4875 15.5342 18.7437 16.4816 18.3304 17.1269H18.3513V15.7562H15.2118C15.2528 16.6431 15.2115 25.2106 15.2115 25.2106L15.2116 25.2103Z" fill="white"/>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/@hugo_hoch" target="_blank" class="hover:underline hover:scale-110 hover:opacity-50">
                                        <svg width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.5" y="1.11719" width="34" height="34" stroke="white"/>
                                            <path d="M27.2344 13.3031C27.0059 12.444 26.3299 11.7663 25.4699 11.534C23.9147 11.1172 17.6752 11.1172 17.6752 11.1172C17.6752 11.1172 11.4388 11.1172 9.88054 11.534C9.02364 11.7631 8.34763 12.4408 8.11595 13.3031C7.7002 14.8622 7.7002 18.1172 7.7002 18.1172C7.7002 18.1172 7.7002 21.3722 8.11595 22.9313C8.34446 23.7904 9.02046 24.4681 9.88054 24.7004C11.4388 25.1172 17.6752 25.1172 17.6752 25.1172C17.6752 25.1172 23.9147 25.1172 25.4699 24.7004C26.3268 24.4713 27.0028 23.7936 27.2344 22.9313C27.6502 21.3722 27.6502 18.1172 27.6502 18.1172C27.6502 18.1172 27.6502 14.8622 27.2344 13.3031Z" fill="white"/>
                                            <path d="M15.6821 21.1176L20.8648 18.1172L15.6821 15.1167V21.1176Z" fill="#060606"/>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="text-mobile--center sm:flex sm:items-center sm:justify-between">
                    <span class="copy--custom">© 2024 <a href=""
                            class="hover:underline">Hugo Hoch</a>. Todos os direitos reservados.
                    </span>
                    <a href="https://algoritmux.com/" class="copy--custom">Desenvolvido pela agência Algoritmux</a>
                </div>
            </div>
        </footer>
    </section>
</template>