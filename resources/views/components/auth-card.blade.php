<style>
    .test{
        background: linear-gradient(180deg, #2A61CD 0%, #64C1D1 100%);
        background-image: url(https://upload.wikimedia.org/wikipedia/commons/2/2c/IT_Del_Drone2.jpg);
        background-size: 1820px 1040px;
    }

    #login{
        border-bottom-left-radius: 40px;
        border-top-right-radius: 40px;
    }
</style>

<div class="min-h-screen flex flex-col sm:justify-center items-center test">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" id="login">
        {{ $slot }}
    </div>
</div>
