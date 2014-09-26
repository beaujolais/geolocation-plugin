geolocation-plugin
==================

Geolocation services for OctoberCMS

## Geolocated Address Form Field

Renders a Google Maps autocomplete address field. Automatically populates mapped fields based on the value entered and selected in the address.

Available mappings:

- street
- city
- zip
- state
- country
- country-long
- latitude
- longitude

Usage:

    # ===================================
    #  Form Field Definitions
    # ===================================

    fields:
        address:
            label: Address
            type: geoaddress
            fieldMap:
                latitude: latitude
                longitude: longitude
                city: city
                zip: zip
                country: country_code
                state: state_code

            city:
                label: City
            zip:
                label: Zip
            country_code:
                label: Country
            state_code:
                label: State
            latitude:
                label: Latitude
            longitude:
                label: Longitude

## Location Code to ID Model trait

Converts country_code and state_code to their respective identifiers.

    <?php

    class MyModel extends Model
    {
        use \Responsiv\Geolocation\Traits\LocationCode;

        /**
         * @var array Relations
         */
        public $belongsTo = [
            'country'          => ['RainLab\User\Models\Country'],
            'state'            => ['RainLab\User\Models\State'],
        ];
    }

Example:

    // Softly looks up and sets the country_id and state_id
    // for these Country and State relations.

    $model->country_code = "US";
    $model->state_code = "FL";
    $model->save();