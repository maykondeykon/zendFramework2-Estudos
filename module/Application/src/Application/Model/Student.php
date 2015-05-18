<?php
namespace Application\Model;

use Zend\Form\Annotation;

/**
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ObjectProperty")
 * @Annotation\Name("Student")
 * @Annotation\Attributes({"class":"form-horizontal"})
 */
class Student
{
    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Required({"required":"true"})
     * @Annotation\Filter({"name":"StripTags"})
     * @Annotation\Filter({"name":"StringToUpper"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":"5"}})
     * @Annotation\Options({"label":"Absent Id:"})
     * @Annotation\Attributes({"class":"form-control"})
     */
    public $absentid;
     
    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Required({"required":"true" })
     * @Annotation\Filter({"name":"StripTags"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":"1"}})
     * @Annotation\Options({"label":"Name:"})
     * @Annotation\Attributes({"class":"form-control"})
     */
    public $name;
     
    /**
     * @Annotation\Type("Zend\Form\Element\Radio")
     * @Annotation\Required({"required":"true" })
     * @Annotation\Filter({"name":"StripTags"})
     * @Annotation\Options({"label":"Gender:",
     *                      "value_options" : {"1":"Male","2":"Female"}})
     * @Annotation\Validator({"name":"InArray",
     *                        "options":{"haystack":{"1","2"},
     *                              "messages":{"notInArray":"Gender is not valid"}}})
     * @Annotation\Attributes({"value":"1","class":"form-control"})
     */
    public $gender;
     
    /**
     * @Annotation\Type("Zend\Form\Element\Select")
     * @Annotation\Required({"required":"true" })
     * @Annotation\Filter({"name":"StripTags"})
     * @Annotation\Options({"label":"Class:",
     *                      "value_options" : {"0":"Select a Class","1":"A","2":"B","3":"C"}})
     * @Annotation\Validator({"name":"InArray",
     *                        "options":{"haystack":{"1","2","3"},
     *                              "messages":{"notInArray":"Por favor selecione uma classe"}}})
     * @Annotation\Attributes({"value":"0","class":"form-control"})
     */
    public $class;
     
     
    /**
     * @Annotation\Type("Zend\Form\Element\Submit")
     * @Annotation\Attributes({"value":"Salvar","class":"btn btn-default"})
     */
    public $submit;
}
