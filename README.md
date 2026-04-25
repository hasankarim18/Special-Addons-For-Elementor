# Nedessary Points

1. Daynamic Tag has to be provided

```
 $this->add_control(
            'client_name',
            [
                'label' => esc_html__('Client name', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Jhon doe', 'textdomain'),
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ]
            ]
        );

```

2. Elementor `frontend available`
   2.1 This is used to change js data in editor and front end. for example: `slides per page` in a slider

   ```
        $this->add_control(
            'unique-control-name',
            [
                'label' => esc_html__( 'Control Label', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 100,
                'frontend_available' => true, // front end available
            ]
        );
   ```
