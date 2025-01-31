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
   &listIds=`yourListIds` // comma separated list
]]

<form action="[[~[[*id]]]]" method="post">
    <div>
        <label>E-mail: </label>
        <input type="email" name="email" value="[[!+fi.email]]">
    </div>

    <button type="submit">senden</button>
</form>
```

