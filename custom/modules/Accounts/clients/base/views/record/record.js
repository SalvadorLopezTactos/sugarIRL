({
    extendsFrom: 'RecordView',

    initialize: function (options) {
        this._super('initialize', [options]);

        //Validaciones
        this.model.addValidationTask('validateRFC', _.bind(this._doValidateReqRFC, this));
        this.model.addValidationTask('validateCURP', _.bind(this._doValidateReqCURP, this));

    },

    //RFC: rfc_c
    _doValidateReqRFC: function (fields, errors, callback) {
        if ( this.model.get('rfc_c'))
        {
            //Moral
            if (this.model.get('person_type_c') == 'Moral'  && this.model.get('rfc_c').toString().length != 12 )
            {
                errors['rfc_c'] = 'RFC debe contener 12 caracteres';
                errors['rfc_c'].required = true;    
            }
            //Física
            if (this.model.get('person_type_c') == 'Fisica'  && this.model.get('rfc_c').toString().length != 13 )
            {
                errors['rfc_c'] = 'RFC debe contener 13 caracteres';
                errors['rfc_c'].required = true;    
            }
        }
        callback(null, fields, errors);
    },

    //CURP: curp_c
    _doValidateReqCURP: function (fields, errors, callback) {
        if (this.model.get('curp_c'))
        {
            //Física
            if (this.model.get('person_type_c') == 'Fisica'  && this.model.get('curp_c').toString().length != 18 )
            {
                errors['curp_c'] = 'CURP debe contener 18 caracteres';
                errors['curp_c'].required = true;    
            }
        }
        callback(null, fields, errors);
    },

});
