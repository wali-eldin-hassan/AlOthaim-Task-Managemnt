<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __('Integrations') }}</h1>
    </x-slot>

    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 xl:grid-cols-3">
        <div class="flex flex-col justify-between p-5 bg-white rounded-lg shadow-lg shadow-gray-200 dark:bg-gray-800 dark:shadow-none">
            <h1 class="flex items-center font-semibold text-gray-800 capitalize gap-x-2 dark:text-white">
                <svg class="w-12 h-12 text-black dark:text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 4.5H9V8.5H15V4.5Z" fill="currentColor" /><path d="M4 10.5H9V14.5H15V10.5H20V19.5H4V10.5Z" fill="currentColor" /></svg>

                unsplash
            </h1>

            <p class="mt-3 text-sm text-gray-600 capitalize dark:text-gray-300">Unsplash integrations: Easy access to stunning, royalty-free images for your projects.</p>

            <div>
                <button class="flex items-center px-4 py-2 mt-4 text-sm text-red-600 transition-colors duration-200 bg-red-100 rounded-lg hover:bg-red-200 dark:bg-red-700/50 dark:text-white gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                    </svg>
    
                    Disconnect
                </button>
            </div>
        </div>

        <div class="flex flex-col justify-between p-5 bg-white rounded-lg shadow-lg shadow-gray-200 dark:bg-gray-800 dark:shadow-none">
            <h1 class="flex items-center font-semibold text-gray-800 capitalize gap-x-3 dark:text-white">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="48" height="42" viewBox="0 0 48 42" id="drive"><g fill="none" fill-rule="evenodd"><g transform="translate(-601 -955)"><g transform="translate(601 955)"><path fill="#3777E3" d="M8 42l8-14h32l-8 14z"></path><path fill="#FFCF63" d="M32 28h16L32 0H16z"></path><path fill="#11A861" d="M0 28l8 14 16-28-8-14z"></path></g></g></g></svg>

                google dirve
            </h1>

            <p class="mt-3 text-sm text-gray-600 capitalize dark:text-gray-300">Google Drive: Your digital workspace for seamless file management and effortless collaboration.</p>

            <div>
                <button class="flex items-center px-4 py-2 mt-4 text-sm transition-colors duration-200 rounded-lg text-emerald-600 bg-emerald-100 hover:bg-emerald-200 dark:bg-emerald-700/50 dark:text-white gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                    </svg>
    
                    Connect
                </button>
            </div>
        </div>

        <div class="flex flex-col justify-between p-5 bg-white rounded-lg shadow-lg shadow-gray-200 dark:bg-gray-800 dark:shadow-none">
            <h1 class="flex items-center font-semibold text-gray-800 capitalize gap-x-3 dark:text-white">
                <svg class="w-8 h-8 fill-current text-sky-400" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="twitter"><path d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z"></path></svg>

                twitter
            </h1>

            <p class="mt-3 text-sm text-gray-600 capitalize dark:text-gray-300">Twitter: The global platform for real-time updates, conversations, and trends, all in one place.</p>

            <div>
                <button class="flex items-center px-4 py-2 mt-4 text-sm text-red-600 transition-colors duration-200 bg-red-100 rounded-lg hover:bg-red-200 dark:bg-red-700/50 dark:text-white gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                    </svg>
    
                    Disconnect
                </button>
            </div>
        </div>

        <div class="flex flex-col justify-between p-5 bg-white rounded-lg shadow-lg shadow-gray-200 dark:bg-gray-800 dark:shadow-none">
            <h1 class="flex items-center font-semibold text-gray-800 capitalize gap-x-3 dark:text-white">
                <svg class="w-8 h-8 text-black fill-current dark:text-white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" id="mailchimp"><path d="M3.996 15.064c.065.009.16-.038.219-.2l.017-.052c.026-.085.076-.243.156-.37.125-.189.335-.312.574-.312.139 0 .268.042.376.113.264.175.365.499.253.81-.059.161-.153.468-.133.72.043.512.356.717.636.74.273.01.464-.145.512-.258.03-.065.005-.106-.01-.124l.001-.001c-.042-.053-.112-.037-.179-.021-.048.013-.103.021-.16.022-.002 0-.005 0-.008 0-.117 0-.22-.058-.283-.147l-.001-.001c-.078-.12-.073-.299.012-.504l.04-.092c.138-.308.367-.825.11-1.317-.193-.37-.509-.602-.889-.65-.044-.006-.094-.009-.144-.009-.329 0-.626.14-.834.364L4.26 13.776c-.378.418-.437.988-.363 1.19C3.924 15.039 3.966 15.06 3.996 15.064zM17.749 12.308c-.004.235.131.428.301.431.17.003.313-.185.317-.42.003-.235-.132-.428-.302-.432C17.894 11.884 17.752 12.072 17.749 12.308zM17.677 11.341c.164-.021.33-.021.494 0 .089-.205.104-.558.024-.942-.12-.571-.279-.917-.611-.863s-.345.468-.225 1.039C17.426 10.896 17.545 11.171 17.677 11.341z"></path><path d="M5.611,18.655c1.399,3.24,4.595,5.228,8.343,5.34c4.021,0.12,7.396-1.776,8.811-5.182c0.093-0.24,0.485-1.317,0.485-2.267c0-0.956-0.537-1.352-0.879-1.352h0.001c-0.01-0.037-0.078-0.286-0.171-0.586l-0.189-0.51c0.374-0.563,0.38-1.066,0.331-1.35c-0.054-0.353-0.199-0.654-0.494-0.964c-0.294-0.312-0.897-0.63-1.744-0.868l-0.444-0.124c-0.002-0.018-0.023-1.053-0.043-1.497c-0.013-0.32-0.041-0.822-0.195-1.315c-0.184-0.669-0.505-1.253-0.907-1.627c1.106-1.152,1.797-2.422,1.795-3.511c-0.003-2.095-2.563-2.73-5.718-1.416l-0.668,0.285c-0.312-0.308-0.712-0.702-1.111-1.095l-0.115-0.112C9.1-2.65-2.145,9.912,1.45,12.964l0.787,0.668c-0.155,0.403-0.244,0.869-0.244,1.357c0,0.15,0.009,0.297,0.025,0.443c0.086,0.838,0.516,1.639,1.213,2.259C3.893,18.281,4.765,18.656,5.611,18.655z M17.408,7.377c0.032-0.005,0.111-0.034,0.269-0.026c0.17,0.007,0.324,0.06,0.456,0.147c0.53,0.355,0.605,1.214,0.633,1.844c0.016,0.36,0.059,1.228,0.074,1.478c0.034,0.57,0.183,0.65,0.485,0.75c0.169,0.057,0.328,0.099,0.56,0.164c0.703,0.199,1.119,0.4,1.382,0.659c0.157,0.161,0.229,0.333,0.252,0.497c0.084,0.608-0.468,1.359-1.932,2.041c-1.6,0.746-3.539,0.935-4.879,0.785l-0.469-0.053c-1.072-0.145-1.683,1.247-1.041,2.201c0.415,0.615,1.545,1.015,2.674,1.015c2.592,0,4.583-1.111,5.324-2.072l0.06-0.085c0.036-0.055,0.006-0.085-0.04-0.054c-0.605,0.416-3.293,2.069-6.17,1.571c0,0-0.349-0.057-0.668-0.182c-0.253-0.099-0.783-0.344-0.847-0.891c2.32,0.721,3.781,0.039,3.781,0.039l0.001,0.001c0.025-0.012,0.042-0.037,0.042-0.066c0-0.002,0-0.004,0-0.006c-0.003-0.034-0.032-0.06-0.067-0.06c-0.003,0-0.005,0-0.008,0c0,0-1.902,0.283-3.699-0.379c0.195-0.639,0.716-0.408,1.503-0.344c0.194,0.012,0.421,0.019,0.65,0.019c1.04,0,2.044-0.149,2.997-0.42c0.811-0.237,1.869-0.697,2.695-1.35c0.279,0.618,0.379,1.298,0.379,1.298s0.216-0.039,0.398,0.073c0.17,0.106,0.296,0.326,0.21,0.895c-0.174,1.063-0.624,1.926-1.38,2.72c-0.464,0.503-1.013,0.92-1.625,1.229l-0.033,0.015c-0.303,0.165-0.661,0.32-1.032,0.446l-0.05,0.014c-2.849,0.935-5.765-0.093-6.705-2.3c-0.068-0.144-0.133-0.318-0.183-0.497l-0.006-0.025c-0.4-1.455-0.06-3.2,1.004-4.299c0.065-0.07,0.132-0.153,0.132-0.256c0-0.087-0.055-0.178-0.102-0.243c-0.372-0.542-1.661-1.466-1.401-3.254c0.185-1.285,1.304-2.189,2.345-2.135l0.264,0.015c0.452,0.027,0.845,0.085,1.218,0.101c0.622,0.027,1.181-0.064,1.844-0.619C16.926,7.591,17.105,7.428,17.408,7.377z M14.615,4.146c0.04-0.003,0.06,0.049,0.027,0.074c-0.154,0.119-0.292,0.258-0.41,0.413c-0.005,0.007-0.008,0.015-0.008,0.024c0,0.022,0.017,0.039,0.039,0.04c0.655,0.005,1.579,0.235,2.181,0.575c0.04,0.023,0.012,0.102-0.034,0.092c-0.911-0.21-2.402-0.37-3.951,0.01c-1.383,0.339-2.438,0.862-3.208,1.425C9.212,6.828,9.167,6.777,9.197,6.74c0.892-1.036,1.99-1.936,2.972-2.441c0.034-0.017,0.07,0.02,0.052,0.053c-0.079,0.142-0.229,0.447-0.276,0.677c-0.001,0.003-0.001,0.006-0.001,0.009c0,0.022,0.018,0.04,0.04,0.04c0.008,0,0.016-0.002,0.022-0.007C12.618,4.652,13.681,4.203,14.615,4.146z M1.783,12.112C1.088,10.787,2.54,8.21,3.555,6.755c2.509-3.596,6.434-6.318,8.253-5.824c0.295,0.084,1.274,1.224,1.274,1.224s-1.817,1.013-3.503,2.426c-2.271,1.757-3.986,4.311-5.014,7.083h0.001c-0.807,0.157-1.519,0.617-1.954,1.252C2.353,12.698,1.869,12.276,1.783,12.112z M4.777,12.526c0.13-0.027,0.28-0.043,0.433-0.043c0.04,0,0.079,0.001,0.118,0.003H5.322c0.727,0.04,1.797,0.6,2.041,2.191c0.216,1.408-0.128,2.843-1.441,3.068v-0.001c-0.098,0.018-0.21,0.028-0.325,0.028c-0.017,0-0.034,0-0.05-0.001h0.002c-1.214-0.033-2.526-1.131-2.656-2.435C2.749,13.896,3.481,12.788,4.777,12.526z"></path><path d="M13.98 11.079c-.37 0-.711.122-.989.325-.159.117-.308.279-.288.377.008.032.031.056.087.064.132.015.589-.217 1.116-.25.373-.023.682.094.919.199v-.001c.238.105.384.174.441.114.037-.038.026-.11-.03-.203-.118-.193-.359-.388-.615-.497C14.432 11.126 14.211 11.079 13.98 11.079zM16.714 13.073c.209.104.441.063.516-.09.076-.155-.034-.364-.244-.467-.209-.104-.441-.063-.516.09C16.394 12.761 16.504 12.97 16.714 13.073zM14.349 12.069l-.002-.002c-.309.05-.48.152-.589.247-.094.082-.152.173-.152.237l.024.057.051.02c.07 0 .227-.064.227-.064.206-.081.446-.127.696-.127.107 0 .211.008.313.025l-.011-.001c.155.018.229.028.262-.026.01-.015.023-.049-.008-.1C15.088 12.217 14.775 12.018 14.349 12.069z"></path><polygon points="12.987 11.406 12.991 11.404 12.992 11.403"></polygon><polygon points="2.018 15.443 2.017 15.431 2.016 15.425"></polygon><path d="M18.789,15.937c-0.019,0.006-0.04,0.007-0.059,0.013c-0.006,0.002-0.013,0.005-0.018,0.006L18.789,15.937z"></path></svg>

                mailchimp
            </h1>

            <p class="mt-3 text-sm text-gray-600 capitalize dark:text-gray-300">Mailchimp: Simplify your email marketing and connect with your audience effortlessly.</p>

            <div>
                <button class="flex items-center px-4 py-2 mt-4 text-sm transition-colors duration-200 rounded-lg text-emerald-600 bg-emerald-100 hover:bg-emerald-200 dark:bg-emerald-700/50 dark:text-white gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                    </svg>
    
                    Connect
                </button>
            </div>
        </div>

        <div class="flex flex-col justify-between p-5 bg-white rounded-lg shadow-lg shadow-gray-200 dark:bg-gray-800 dark:shadow-none">
            <h1 class="flex items-center font-semibold text-gray-800 capitalize gap-x-3 dark:text-white">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" id="slack"><path fill="#80cade" d="M12.81,67.6a10.2,10.2,0,0,1-9.94-7c-.06-.17-.1-.33-.15-.49A10.69,10.69,0,0,1,9.64,47.07L97,17.8a11.82,11.82,0,0,1,3.19-.47,10.47,10.47,0,0,1,10.21,7.14l.13.42c1.63,5.71-2.43,10.81-7.29,12.44L16.36,67a11.3,11.3,0,0,1-3.55.6Z"></path><path fill="#db015c" d="M27.37,110.55a10.19,10.19,0,0,1-10-6.89c-.05-.16-.1-.32-.15-.49A10.76,10.76,0,0,1,24.16,90L111.5,60.46a11.24,11.24,0,0,1,3.47-.58A10.55,10.55,0,0,1,125.15,67l.13.44A11.05,11.05,0,0,1,124,76.28c-1.25,1.95-5.19,3.66-5.19,3.66l-87.68,30a12,12,0,0,1-3.71.63Z"></path><path fill="#e8a900" d="M100.08,110.74a10.72,10.72,0,0,1-10.27-7.31L60.66,16.84l-.15-.49A10.74,10.74,0,0,1,81,10l29.15,86.58.08.28a10.73,10.73,0,0,1-10.17,13.89Z"></path><path fill="#41b088" d="M56.75,125.33A10.73,10.73,0,0,1,46.48,118L17.33,31.43l-.15-.48a10.72,10.72,0,0,1,6.9-13.12,10.89,10.89,0,0,1,3.34-.56,10.72,10.72,0,0,1,10.27,7.31l29.14,86.59c.05.15.1.32.15.48a10.73,10.73,0,0,1-10.23,13.68h0Z"></path><path fill="#ca161a" d="M85.71,91.24,106,84.29,99.39,64.56,79,71.44Z"></path><path fill="#3b1d37" d="M42.45,106l20.32-6.95L56.08,79.2,35.73,86.08Z"></path><path fill="#69852c" d="M71.24,48.26l20.33-6.94L85,21.82,64.64,28.64Z"></path><path fill="#118f79" d="M28,63,48.3,56.09,41.65,36.34,21.29,43.16,28,63Z"></path></svg>

                Slack
            </h1>

            <p class="mt-3 text-sm text-gray-600 capitalize dark:text-gray-300">Slack: Unify your team's communication, collaboration, and productivity in one organized workspace.</p>

            <div>
                <button class="flex items-center px-4 py-2 mt-4 text-sm transition-colors duration-200 rounded-lg text-emerald-600 bg-emerald-100 hover:bg-emerald-200 dark:bg-emerald-700/50 dark:text-white gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                    </svg>
    
                    Connect
                </button>
            </div>
        </div>

        <div class="flex flex-col justify-between p-5 bg-white rounded-lg shadow-lg shadow-gray-200 dark:bg-gray-800 dark:shadow-none">
            <h1 class="flex items-center font-semibold text-gray-800 capitalize gap-x-3 dark:text-white">
                <svg class="w-8 h-8 text-black fill-current dark:text-white" aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true">
                    <path d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z"></path>
                </svg>

                GitHub
            </h1>

            <p class="mt-3 text-sm text-gray-600 capitalize dark:text-gray-300">GitHub: Empowering developers worldwide with a collaborative platform for coding, sharing, and innovation.</p>

            <div>
                <button class="flex items-center px-4 py-2 mt-4 text-sm transition-colors duration-200 rounded-lg text-emerald-600 bg-emerald-100 hover:bg-emerald-200 dark:bg-emerald-700/50 dark:text-white gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                    </svg>
    
                    Connect
                </button>
            </div>
        </div>
    </div>
</x-app-layout>