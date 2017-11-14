# Meddling With Evil

This project demonstrates how you might integrate WordPress' content management functionality with your Laravel app, to save from building a half-baked UI for your clients.

## Installation

Run `composer install` in:

1. The root directory.
2. The Laravel directory.
3. The WordPress directory.

Come back to the root directory and run `vendor/bin/homestead make`. Update your new `Homestead.yaml` file so that your sites and databases match the following example:

```yaml
ip: 192.168.26.9
memory: 2048
cpus: 1
provider: virtualbox
authorize: ~/.ssh/id_rsa.pub
keys:
    - ~/.ssh/id_rsa
folders:
    -
        map: /path/to/root/folder
        to: /home/vagrant/code
sites:
    -
        map: laravel.meddling.test
        to: /home/vagrant/code/laravel/public
    -
        map: wordpress.meddling.test
        to: /home/vagrant/code/wordpress/web
databases:
    - laravel
    - wordpress
name: meddling-with-evil
hostname: meddling-with-evil
```

Then, update both `laravel/.env` and `wordpress/.env` with appropriate database credentials.

Ensuring you have pointed the hosts `laravel.meddling.test` and `wordpress.meddling.test` to your chosen IP address (in the above example, `192.168.26.9`), you may visit both of these websites.

Begin by firstly installing WordPress. Once WordPress is installed, your Laravel app will work.

You may now visit [http://laravel.meddling.test/sample-page](http://laravel.meddling.test/sample-page). The content for this is pulled from WordPress.

Next, visit [http://wordpress.meddling.test/wp/wp-admin/](http://wordpress.meddling.test/wp/wp-admin/) and add a new Slide (this is a [Custom Post Type](https://codex.wordpress.org/Post_Types)). Once you've added a slide with a feature image, it'll show up on your main Laravel app's home page - [http://laravel.meddling.test/](http://laravel.meddling.test/).
