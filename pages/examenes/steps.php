<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="z-depth-1 m-2">
  <div class="p-4">
    <ul class="stepper linear">
      <li class="step active">
        <div data-step-label="Type something" class="step-title waves-effect waves-dark">Step 1</div>
        <div class="step-new-content">
          <div class="row">
            <div class="md-form col-12 ml-auto">
              <input id="email-linear" type="email" class="form-control validate" required>
              <label for="email-linear">Your e-mail</label>
            </div>
          </div>
          <div class="step-actions">
            <button class="waves-effect waves-dark btn btn-sm btn-primary next-step">CONTINUE</button>
          </div>
        </div>
      </li>
      <li class="step">
        <div class="step-title waves-effect waves-dark">Step 2</div>
        <div class="step-new-content">
          <div class="row">
            <div class="md-form col-12 ml-auto">
              <input id="password-linear" type="password" class="form-control validate" required>
              <label for="password-linear">Your password</label>
            </div>
          </div>
          <div class="step-actions">
            <button class="waves-effect waves-dark btn btn-sm btn-primary next-step">CONTINUE</button>
            <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step">BACK</button>
          </div>
        </div>
      </li>
      <li class="step">
        <div class="step-title waves-effect waves-dark">Step 3</div>
        <div class="step-new-content">
          Finish!
          <div class="step-actions">
            <button class="waves-effect waves-dark btn btn-sm btn-primary m-0 mt-4" type="button">SUBMIT</button>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
</body>
</html>