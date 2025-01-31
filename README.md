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
   &attributes=`firstname=FNAME,lastname=LNAME` // Optional attributes to add to the contact
]]

<form action="[[~[[*id]]]]" method="post">
    <div>
        <label>E-mail: </label>
        <input type="email" name="email" value="[[!+fi.email]]">
    </div>

    <button type="submit">senden</button>
</form>
```

## Properties
Property | Description | Default Value
--- | --- | ---
brevoEmailField  | Field name of email input field. | email
brevoListIds  | Comma separeted list of List-Ids. Example 2,3 |
brevoAttributes | Additional attributes to add to the contact, like firstname, lastname, phone etc. A comma separted list of fieldnames and brevo fieldnames in uppercase. Example: myinputfieldname=BREVOFIELDNAME,firstname=FNAME |
