<!DOCTYPE html>
<html lang="zxx" class="js">

<head>

    @include('backend.code-section.js.head.head')

</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('backend.main-section.body.sidebar.sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('backend.main-section.body.header.header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    @yield('main')
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    @include('backend.main-section.body.footer.footer')
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>

   @include('backend.code-section.js.footer.footer')

</body>

</html>