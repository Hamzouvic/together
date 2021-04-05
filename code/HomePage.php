<?php
    include_once 'User.php';
    $error = false;
    if (!empty($_POST)) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = new User;
        $error = !$user->connect($username,$password);
    }
?>
<?php include 'header.php';?>  

<div class="flex flex-1 items-center justify-center" style="margin-top: 100px;">
    <div class="rounded-lg sm:border-2 px-4 lg:px-24 py-16 lg:max-w-xl sm:max-w-md w-full text-center">
        <form class="text-center" action="" method="post">
            <h1 class="font-bold tracking-wider text-3xl mb-8 w-full text-gray-600">
                Sign in
            </h1>
            <?php if ($error) :?>
                <div class="flex items-center bg-blue text-white text-sm font-bold px-4 py-3" role="alert" style="background-color: blue !important">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                    <p>error</p>
                </div>
            <?php endif;?>
            <div class="py-2 text-left">
            <input type="text" name="username" class="bg-gray-200 border-2 border-gray-100 focus:outline-none bg-gray-100 block w-full py-2 px-4 rounded-lg focus:border-gray-700 " placeholder="username" <?php if ($error):?>value="<?= $_POST['username']?>"<?php endif;?>/>
            </div>
            <div class="py-2 text-left">
                <input type="password" name="password" class="bg-gray-200 border-2 border-gray-100 focus:outline-none bg-gray-100 block w-full py-2 px-4 rounded-lg focus:border-gray-700 " placeholder="Password" />
            </div>
            <div class="py-2">
                <button type="submit" class="border-2 border-gray-100 focus:outline-none bg-purple-600 text-white font-bold tracking-wider block w-full p-2 rounded-lg focus:border-gray-700 hover:bg-purple-700">
                    Sign In
                </button>
            </div>
        </form>
        <div class="text-center">
            <a href="#" class="hover:underline">Forgot password?</a>
        </div>
        <div class="text-center mt-12">
            <span>
                Don't have an account?
            </span>
            <a href="#" class="font-light text-md text-indigo-600 underline font-semibold hover:text-indigo-800">Create One</a>
        </div>
    </div>
</div>

<?php include 'foot.php';?>