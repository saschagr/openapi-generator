/*
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * API version: 1.0.0
 * Generated by: OpenAPI Generator (https://openapi-generator.tech)
 */

package petstore

import (
	"bytes"
	"encoding/json"
)

// AdditionalPropertiesClass struct for AdditionalPropertiesClass
type AdditionalPropertiesClass struct {
	MapString *map[string]string `json:"map_string,omitempty"`
	MapNumber *map[string]float32 `json:"map_number,omitempty"`
	MapInteger *map[string]int32 `json:"map_integer,omitempty"`
	MapBoolean *map[string]bool `json:"map_boolean,omitempty"`
	MapArrayInteger *map[string][]int32 `json:"map_array_integer,omitempty"`
	MapArrayAnytype *map[string][]map[string]interface{} `json:"map_array_anytype,omitempty"`
	MapMapString *map[string]map[string]string `json:"map_map_string,omitempty"`
	MapMapAnytype *map[string]map[string]map[string]interface{} `json:"map_map_anytype,omitempty"`
	Anytype1 *map[string]interface{} `json:"anytype_1,omitempty"`
	Anytype2 *map[string]interface{} `json:"anytype_2,omitempty"`
	Anytype3 *map[string]interface{} `json:"anytype_3,omitempty"`
}

// GetMapString returns the MapString field value if set, zero value otherwise.
func (o *AdditionalPropertiesClass) GetMapString() map[string]string {
	if o == nil || o.MapString == nil {
		var ret map[string]string
		return ret
	}
	return *o.MapString
}

// GetMapStringOk returns a tuple with the MapString field value if set, zero value otherwise
// and a boolean to check if the value has been set.
func (o *AdditionalPropertiesClass) GetMapStringOk() (map[string]string, bool) {
	if o == nil || o.MapString == nil {
		var ret map[string]string
		return ret, false
	}
	return *o.MapString, true
}

// HasMapString returns a boolean if a field has been set.
func (o *AdditionalPropertiesClass) HasMapString() bool {
	if o != nil && o.MapString != nil {
		return true
	}

	return false
}

// SetMapString gets a reference to the given map[string]string and assigns it to the MapString field.
func (o *AdditionalPropertiesClass) SetMapString(v map[string]string) {
	o.MapString = &v
}

// GetMapNumber returns the MapNumber field value if set, zero value otherwise.
func (o *AdditionalPropertiesClass) GetMapNumber() map[string]float32 {
	if o == nil || o.MapNumber == nil {
		var ret map[string]float32
		return ret
	}
	return *o.MapNumber
}

// GetMapNumberOk returns a tuple with the MapNumber field value if set, zero value otherwise
// and a boolean to check if the value has been set.
func (o *AdditionalPropertiesClass) GetMapNumberOk() (map[string]float32, bool) {
	if o == nil || o.MapNumber == nil {
		var ret map[string]float32
		return ret, false
	}
	return *o.MapNumber, true
}

// HasMapNumber returns a boolean if a field has been set.
func (o *AdditionalPropertiesClass) HasMapNumber() bool {
	if o != nil && o.MapNumber != nil {
		return true
	}

	return false
}

// SetMapNumber gets a reference to the given map[string]float32 and assigns it to the MapNumber field.
func (o *AdditionalPropertiesClass) SetMapNumber(v map[string]float32) {
	o.MapNumber = &v
}

// GetMapInteger returns the MapInteger field value if set, zero value otherwise.
func (o *AdditionalPropertiesClass) GetMapInteger() map[string]int32 {
	if o == nil || o.MapInteger == nil {
		var ret map[string]int32
		return ret
	}
	return *o.MapInteger
}

// GetMapIntegerOk returns a tuple with the MapInteger field value if set, zero value otherwise
// and a boolean to check if the value has been set.
func (o *AdditionalPropertiesClass) GetMapIntegerOk() (map[string]int32, bool) {
	if o == nil || o.MapInteger == nil {
		var ret map[string]int32
		return ret, false
	}
	return *o.MapInteger, true
}

// HasMapInteger returns a boolean if a field has been set.
func (o *AdditionalPropertiesClass) HasMapInteger() bool {
	if o != nil && o.MapInteger != nil {
		return true
	}

	return false
}

// SetMapInteger gets a reference to the given map[string]int32 and assigns it to the MapInteger field.
func (o *AdditionalPropertiesClass) SetMapInteger(v map[string]int32) {
	o.MapInteger = &v
}

// GetMapBoolean returns the MapBoolean field value if set, zero value otherwise.
func (o *AdditionalPropertiesClass) GetMapBoolean() map[string]bool {
	if o == nil || o.MapBoolean == nil {
		var ret map[string]bool
		return ret
	}
	return *o.MapBoolean
}

// GetMapBooleanOk returns a tuple with the MapBoolean field value if set, zero value otherwise
// and a boolean to check if the value has been set.
func (o *AdditionalPropertiesClass) GetMapBooleanOk() (map[string]bool, bool) {
	if o == nil || o.MapBoolean == nil {
		var ret map[string]bool
		return ret, false
	}
	return *o.MapBoolean, true
}

// HasMapBoolean returns a boolean if a field has been set.
func (o *AdditionalPropertiesClass) HasMapBoolean() bool {
	if o != nil && o.MapBoolean != nil {
		return true
	}

	return false
}

// SetMapBoolean gets a reference to the given map[string]bool and assigns it to the MapBoolean field.
func (o *AdditionalPropertiesClass) SetMapBoolean(v map[string]bool) {
	o.MapBoolean = &v
}

// GetMapArrayInteger returns the MapArrayInteger field value if set, zero value otherwise.
func (o *AdditionalPropertiesClass) GetMapArrayInteger() map[string][]int32 {
	if o == nil || o.MapArrayInteger == nil {
		var ret map[string][]int32
		return ret
	}
	return *o.MapArrayInteger
}

// GetMapArrayIntegerOk returns a tuple with the MapArrayInteger field value if set, zero value otherwise
// and a boolean to check if the value has been set.
func (o *AdditionalPropertiesClass) GetMapArrayIntegerOk() (map[string][]int32, bool) {
	if o == nil || o.MapArrayInteger == nil {
		var ret map[string][]int32
		return ret, false
	}
	return *o.MapArrayInteger, true
}

// HasMapArrayInteger returns a boolean if a field has been set.
func (o *AdditionalPropertiesClass) HasMapArrayInteger() bool {
	if o != nil && o.MapArrayInteger != nil {
		return true
	}

	return false
}

// SetMapArrayInteger gets a reference to the given map[string][]int32 and assigns it to the MapArrayInteger field.
func (o *AdditionalPropertiesClass) SetMapArrayInteger(v map[string][]int32) {
	o.MapArrayInteger = &v
}

// GetMapArrayAnytype returns the MapArrayAnytype field value if set, zero value otherwise.
func (o *AdditionalPropertiesClass) GetMapArrayAnytype() map[string][]map[string]interface{} {
	if o == nil || o.MapArrayAnytype == nil {
		var ret map[string][]map[string]interface{}
		return ret
	}
	return *o.MapArrayAnytype
}

// GetMapArrayAnytypeOk returns a tuple with the MapArrayAnytype field value if set, zero value otherwise
// and a boolean to check if the value has been set.
func (o *AdditionalPropertiesClass) GetMapArrayAnytypeOk() (map[string][]map[string]interface{}, bool) {
	if o == nil || o.MapArrayAnytype == nil {
		var ret map[string][]map[string]interface{}
		return ret, false
	}
	return *o.MapArrayAnytype, true
}

// HasMapArrayAnytype returns a boolean if a field has been set.
func (o *AdditionalPropertiesClass) HasMapArrayAnytype() bool {
	if o != nil && o.MapArrayAnytype != nil {
		return true
	}

	return false
}

// SetMapArrayAnytype gets a reference to the given map[string][]map[string]interface{} and assigns it to the MapArrayAnytype field.
func (o *AdditionalPropertiesClass) SetMapArrayAnytype(v map[string][]map[string]interface{}) {
	o.MapArrayAnytype = &v
}

// GetMapMapString returns the MapMapString field value if set, zero value otherwise.
func (o *AdditionalPropertiesClass) GetMapMapString() map[string]map[string]string {
	if o == nil || o.MapMapString == nil {
		var ret map[string]map[string]string
		return ret
	}
	return *o.MapMapString
}

// GetMapMapStringOk returns a tuple with the MapMapString field value if set, zero value otherwise
// and a boolean to check if the value has been set.
func (o *AdditionalPropertiesClass) GetMapMapStringOk() (map[string]map[string]string, bool) {
	if o == nil || o.MapMapString == nil {
		var ret map[string]map[string]string
		return ret, false
	}
	return *o.MapMapString, true
}

// HasMapMapString returns a boolean if a field has been set.
func (o *AdditionalPropertiesClass) HasMapMapString() bool {
	if o != nil && o.MapMapString != nil {
		return true
	}

	return false
}

// SetMapMapString gets a reference to the given map[string]map[string]string and assigns it to the MapMapString field.
func (o *AdditionalPropertiesClass) SetMapMapString(v map[string]map[string]string) {
	o.MapMapString = &v
}

// GetMapMapAnytype returns the MapMapAnytype field value if set, zero value otherwise.
func (o *AdditionalPropertiesClass) GetMapMapAnytype() map[string]map[string]map[string]interface{} {
	if o == nil || o.MapMapAnytype == nil {
		var ret map[string]map[string]map[string]interface{}
		return ret
	}
	return *o.MapMapAnytype
}

// GetMapMapAnytypeOk returns a tuple with the MapMapAnytype field value if set, zero value otherwise
// and a boolean to check if the value has been set.
func (o *AdditionalPropertiesClass) GetMapMapAnytypeOk() (map[string]map[string]map[string]interface{}, bool) {
	if o == nil || o.MapMapAnytype == nil {
		var ret map[string]map[string]map[string]interface{}
		return ret, false
	}
	return *o.MapMapAnytype, true
}

// HasMapMapAnytype returns a boolean if a field has been set.
func (o *AdditionalPropertiesClass) HasMapMapAnytype() bool {
	if o != nil && o.MapMapAnytype != nil {
		return true
	}

	return false
}

// SetMapMapAnytype gets a reference to the given map[string]map[string]map[string]interface{} and assigns it to the MapMapAnytype field.
func (o *AdditionalPropertiesClass) SetMapMapAnytype(v map[string]map[string]map[string]interface{}) {
	o.MapMapAnytype = &v
}

// GetAnytype1 returns the Anytype1 field value if set, zero value otherwise.
func (o *AdditionalPropertiesClass) GetAnytype1() map[string]interface{} {
	if o == nil || o.Anytype1 == nil {
		var ret map[string]interface{}
		return ret
	}
	return *o.Anytype1
}

// GetAnytype1Ok returns a tuple with the Anytype1 field value if set, zero value otherwise
// and a boolean to check if the value has been set.
func (o *AdditionalPropertiesClass) GetAnytype1Ok() (map[string]interface{}, bool) {
	if o == nil || o.Anytype1 == nil {
		var ret map[string]interface{}
		return ret, false
	}
	return *o.Anytype1, true
}

// HasAnytype1 returns a boolean if a field has been set.
func (o *AdditionalPropertiesClass) HasAnytype1() bool {
	if o != nil && o.Anytype1 != nil {
		return true
	}

	return false
}

// SetAnytype1 gets a reference to the given map[string]interface{} and assigns it to the Anytype1 field.
func (o *AdditionalPropertiesClass) SetAnytype1(v map[string]interface{}) {
	o.Anytype1 = &v
}

// GetAnytype2 returns the Anytype2 field value if set, zero value otherwise.
func (o *AdditionalPropertiesClass) GetAnytype2() map[string]interface{} {
	if o == nil || o.Anytype2 == nil {
		var ret map[string]interface{}
		return ret
	}
	return *o.Anytype2
}

// GetAnytype2Ok returns a tuple with the Anytype2 field value if set, zero value otherwise
// and a boolean to check if the value has been set.
func (o *AdditionalPropertiesClass) GetAnytype2Ok() (map[string]interface{}, bool) {
	if o == nil || o.Anytype2 == nil {
		var ret map[string]interface{}
		return ret, false
	}
	return *o.Anytype2, true
}

// HasAnytype2 returns a boolean if a field has been set.
func (o *AdditionalPropertiesClass) HasAnytype2() bool {
	if o != nil && o.Anytype2 != nil {
		return true
	}

	return false
}

// SetAnytype2 gets a reference to the given map[string]interface{} and assigns it to the Anytype2 field.
func (o *AdditionalPropertiesClass) SetAnytype2(v map[string]interface{}) {
	o.Anytype2 = &v
}

// GetAnytype3 returns the Anytype3 field value if set, zero value otherwise.
func (o *AdditionalPropertiesClass) GetAnytype3() map[string]interface{} {
	if o == nil || o.Anytype3 == nil {
		var ret map[string]interface{}
		return ret
	}
	return *o.Anytype3
}

// GetAnytype3Ok returns a tuple with the Anytype3 field value if set, zero value otherwise
// and a boolean to check if the value has been set.
func (o *AdditionalPropertiesClass) GetAnytype3Ok() (map[string]interface{}, bool) {
	if o == nil || o.Anytype3 == nil {
		var ret map[string]interface{}
		return ret, false
	}
	return *o.Anytype3, true
}

// HasAnytype3 returns a boolean if a field has been set.
func (o *AdditionalPropertiesClass) HasAnytype3() bool {
	if o != nil && o.Anytype3 != nil {
		return true
	}

	return false
}

// SetAnytype3 gets a reference to the given map[string]interface{} and assigns it to the Anytype3 field.
func (o *AdditionalPropertiesClass) SetAnytype3(v map[string]interface{}) {
	o.Anytype3 = &v
}

type NullableAdditionalPropertiesClass struct {
	Value AdditionalPropertiesClass
	ExplicitNull bool
}

func (v NullableAdditionalPropertiesClass) MarshalJSON() ([]byte, error) {
    switch {
    case v.ExplicitNull:
        return []byte("null"), nil
    default:
		return json.Marshal(v.Value)
	}
}

func (v *NullableAdditionalPropertiesClass) UnmarshalJSON(src []byte) error {
	if bytes.Equal(src, []byte("null")) {
		v.ExplicitNull = true
		return nil
	}

	return json.Unmarshal(src, &v.Value)
}
