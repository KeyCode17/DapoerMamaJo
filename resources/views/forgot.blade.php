<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>

    <!-- Roboto font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />

    <!-- Tailwind Elements styles-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />

    <!-- Tailwind CSS config -->
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>
</head>

<body>
    <section class="gradient-form h-full bg-neutral-200 dark:bg-neutral-700">
        <div class="container h-full p-10">
            <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
                <div class="w-full">
                    <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                        <div class="g-0 lg:flex lg:flex-wrap">
                            <!-- Left column container-->
                            <div class="md:mx-auto lg:w-10/12">
                                <div class="md:mx-6 md:p-12">
                                    <!--Logo-->
                                    <div class="text-center">
                                        <svg class="md:mx-auto md:w-40 sm:w-20" xmlns="http://www.w3.org/2000/svg"
                                            id="currentIllo" data-name="Layer 1" width="200" height="150"
                                            viewBox="0 0 951.23547 632.16225"
                                            class="injected-svg DownloadModal__ImageFile-sc-p17csy-5 iIfSkb grid_media"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path
                                                d="M567.94141,648.63076c-13.912-67.2669-31.302-89.69385-31.302-89.69385l-6.64343-5.15185-7.98926-6.20581.03858-.79785-1.8949-.64411-.44513-.34576-.72943-.56006-.11731.126-.24768.25647-36.15234-12.2887-45.86536-15.57934L415.35455,490.14a36.7343,36.7343,0,0,0-29.38672-14.33386l-67.82916.50189a36.73449,36.73449,0,0,0-24.70972,9.80127l-44.58306,41.35412-69.469,33.17786-.11725-.11725-.72949.52106-10.73358,5.13232.44293,2.30561-6.64343,4.79376s-17.39,20.868-31.30206,83.459c-3.53907,15.926-5.28113,50.08979-5.90992,92.1883a16.06908,16.06908,0,0,0,16.06244,16.30737H511.49408v-.00006H557.8056a16.0717,16.0717,0,0,0,16.06262-16.29071C573.25409,703.131,571.51269,665.902,567.94141,648.63076Z"
                                                transform="translate(-124.38226 -133.06928)" fill="#3f3d56"></path>
                                            <path
                                                d="M615.54847,191.73153a54.43073,54.43073,0,1,0,0,108.86146H1021.187a54.43073,54.43073,0,0,0,0-108.86146Z"
                                                transform="translate(-124.38226 -133.06928)" fill="#e5e5e5"></path>
                                            <path
                                                d="M615.54847,202.74727a43.415,43.415,0,1,0,0,86.83H1021.187a43.415,43.415,0,0,0,0-86.83Z"
                                                transform="translate(-124.38226 -133.06928)" fill="#fff"></path>
                                            <circle id="e096411a-cdc3-4e6d-bbd4-4630e1fee17e"
                                                data-name="ab6171fa-7d69-4734-b81c-8dff60f9761b" cx="238.3229"
                                                cy="228.39206" r="88.86282" fill="#9e616a"></circle>
                                            <path
                                                d="M339.97228,445.973q-.56945-1.25376-1.13574-2.51618c.14551.00466.28954.02559.435.0294Z"
                                                transform="translate(-124.38226 -133.06928)" fill="#2f2e41"></path>
                                            <path
                                                d="M271.37112,276.63954c4.49445-3.5853,9.74736-6.88419,15.49373-6.69877,5.74613.18519,11.57324,5.37507,10.38275,10.99974a91.31784,91.31784,0,0,1,109.89524-41.20778c14.28183,5.03874,28.28737,15.1192,31.56809,29.90415.8422,3.79533,1.023,7.95689,3.39274,11.03885,2.98786,3.88573,8.70455,4.76475,13.41179,3.3978q.07062-.0205.141-.04154a4.1986,4.1986,0,0,1,5.07324,5.92695l-4.041,7.5365a32.38317,32.38317,0,0,0,15.428-.3281,4.195,4.195,0,0,1,4.45469,6.52819c-13.32473,18.29415-35.58607,30.10755-58.30327,29.96873-16.14591-.09846-32.45814-5.66309-48.17179-1.95012a41.84383,41.84383,0,0,0-28.14382,58.74019c-4.82733-5.28005-14.159-4.03-19.097,1.147-4.93774,5.177-6.21612,12.90385-5.71853,20.04085.76077,10.91577,5.03759,21.20144,9.5463,31.21221-37.80123-1.19-73.555-27.707-85.58977-63.57189C229.00827,343.26738,241.674,300.32986,271.37112,276.63954Z"
                                                transform="translate(-124.38226 -133.06928)" fill="#2f2e41"></path>
                                            <polygon
                                                points="87.464 495.253 112.388 630.86 127.343 632.162 87.464 495.253"
                                                opacity="0.2"></polygon>
                                            <polygon
                                                points="362.007 485.026 337.083 630.762 322.128 632.162 362.007 485.026"
                                                opacity="0.2"></polygon>
                                            <path
                                                d="M292.62933,231.00135c-4.77882,1.99547-9.76532-.19144-11.85656-5.19961-2.12322-5.08476-.14017-10.24648,4.71525-12.27393,4.85588-2.02764,9.75359.1646,11.911,5.33137C299.52417,223.94845,297.5627,228.94135,292.62933,231.00135Zm-9.15419-27.482-3.79972,1.58663a4.09911,4.09911,0,0,1-5.20612-1.90948l-.1879-.36761c-4.08846-7.37337-4.5566-16.33467-1.384-26.62094,2.939-9.22731,4.1597-15.71683,1.70477-21.596-2.83836-6.79741-8.8993-8.92671-16.62838-5.84218-2.99769,1.25173-3.95159,1.23179-6.31064,3.572a5.4161,5.4161,0,0,1-3.92122,1.59344,5.2354,5.2354,0,0,1-3.74713-1.643,5.34757,5.34757,0,0,1-.03684-7.29733,41.53525,41.53525,0,0,1,14.04574-9.64413c16.60647-6.93429,24.96626,3.3032,28.79182,12.46479,3.74183,8.96108,1.637,17.27546-1.745,28.04341-2.83416,8.94752-2.66908,15.57751.55033,22.16977a4.08088,4.08088,0,0,1-2.12565,5.49059Z"
                                                transform="translate(-124.38226 -133.06928)" fill="#ff676b"></path>
                                            <path
                                                d="M705.14883,272.122h-80.707a1.944,1.944,0,1,1,0-3.88791h80.707a1.944,1.944,0,0,1,0,3.88791Z"
                                                transform="translate(-124.38226 -133.06928)" fill="#ff676b"></path>
                                            <path
                                                d="M807.53044,272.76994h-80.707a1.944,1.944,0,1,1,0-3.88791h80.707a1.944,1.944,0,1,1,0,3.88791Z"
                                                transform="translate(-124.38226 -133.06928)" fill="#ff676b"></path>
                                            <path
                                                d="M909.91205,273.41793H829.205a1.944,1.944,0,0,1,0-3.88791h80.707a1.944,1.944,0,1,1,0,3.88791Z"
                                                transform="translate(-124.38226 -133.06928)" fill="#ff676b"></path>
                                            <path
                                                d="M1012.29367,274.06591h-80.707a1.944,1.944,0,0,1,0-3.88791h80.707a1.944,1.944,0,0,1,0,3.88791Z"
                                                transform="translate(-124.38226 -133.06928)" fill="#ff676b"></path>
                                            <circle cx="540.23547" cy="106.16225" r="15" fill="#ff676b">
                                            </circle>
                                            <circle cx="643.23547" cy="106.16225" r="15" fill="#ff676b">
                                            </circle>
                                            <circle cx="746.23547" cy="106.16225" r="15" fill="#ff676b">
                                            </circle>
                                            <circle cx="849.23547" cy="106.16225" r="15" fill="#ff676b">
                                            </circle>
                                        </svg>
                                        <h4 class="mb-12 mt-1 pb-1 text-xl font-semibold">
                                            Forgot Password
                                        </h4>
                                    </div>

                                    <form>
                                        <p class="mb-4">Insert Username</p>
                                        <!--Username input-->
                                        <div class="relative mb-4" data-te-input-wrapper-init>
                                            <input type="text"
                                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                id="exampleFormControlInput1" placeholder="Username" />
                                            <label for="exampleFormControlInput1"
                                                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Username
                                            </label>
                                        </div>

                                        <!--Submit button-->
                                        <div class="mb-12 pb-1 pt-1 text-center">
                                            <button
                                                class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                                                type="button" data-te-ripple-init data-te-ripple-color="light"
                                                style="
                        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
                      ">
                                                Reset Password
                                            </button>
                                        </div>

                                        <!--Back button-->
                                        <div class="flex items-center justify-between pb-6">
                                            <p class="mb-0 mr-2">Remember your password?</p>
                                            <button type="button"
                                                class="inline-block rounded border-2 border-danger px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-danger transition duration-150 ease-in-out hover:border-danger-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-danger-600 focus:border-danger-600 focus:text-danger-600 focus:outline-none focus:ring-0 active:border-danger-700 active:text-danger-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                                                data-te-ripple-init data-te-ripple-color="light"
                                                onclick="location.href = './login';">
                                                Back to Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tailwind Elements JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>
