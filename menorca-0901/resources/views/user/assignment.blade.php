<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pricing Layout Assignment</title>
</head>

<body class="container py-4">

    <div class="row g-4">
        <div class="col-md-4">

            <div class="p-4 bg-light border rounded">
                <div class="mb-3">
                    <label for="email" class="form-label">
                        Email:
                    </label>

                    <input
                        type="email"
                        class="form-control"
                        id="email"
                    >
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">
                        Password:
                    </label>

                    <input
                        type="password"
                        class="form-control"
                        id="password"
                    >
                </div>

                <div>
                    <button type="button" class="btn btn-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                        </svg>
                        Login
                    </button>

                    <a href="#" class="ms-3">
                        Forgot password?
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="text-center mb-4">
                <h2>Pricing</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make
                    a type specimen book.
                </p>
            </div>

            <div class="row g-3 mb-5">

                <div class="col-md-4">
                    <div class="border border-3 border-dark bg-light p-5"></div>
                </div>

                <div class="col-md-4">
                    <div class="border border-3 border-dark bg-light p-5"></div>
                </div>

                <div class="col-md-4">
                    <div class="border border-3 border-dark bg-light p-5"></div>
                </div>

                <div class="col-md-4">
                    <div class="border border-3 border-dark bg-light p-5"></div>
                </div>

                <div class="col-md-4">
                    <div class="border border-3 border-dark bg-light p-5"></div>
                </div>

                <div class="col-md-4">
                    <div class="border border-3 border-dark bg-light p-5"></div>
                </div>

            </div>

            <div class="mt-4">

                <h5 class="text-center mb-3">
                    Compare Plans
                </h5>

                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Free</th>
                            <th scope="col">Pro</th>
                            <th scope="col">Enterprise</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <th scope="row">Public</th>
                            <td>✓</td>
                            <td>✓</td>
                            <td>✓</td>
                        </tr>

                        <tr>
                            <th scope="row">Private</th>
                            <td>✓</td>
                            <td>✓</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">Permissions</th>
                            <td></td>
                            <td>✓</td>
                            <td>✓</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>