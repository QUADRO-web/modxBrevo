# Brevo
MODX Extra

## Installation
Install the extra via MODX package manager

## Create API Key
Signup for an account on https://brevo.com/ and create an api key.

## System settings
Add api key to your system settings

## Setup Example
```
[[!FormIt?
   &hooks=`brevoSubscribe`
   &listId=`yourListId`
]]

<form action="[[~[[*id]]]]" method="post">
    <div>
        <label>E-mail: </label>
        <input type="text" name="email" value="[[!+fi.email]]">
        <span class="error">[[!+fi.error.email]]</span>
    </div>

    <button type="submit">send</button>
</form>
```

