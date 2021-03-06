# WordPress Plugin BoilerPlate for Plugin Developers.
A personal boilerplate that uses composer and docker to make plugin development faster

## Prerequisite
You must know what this boilerplate is meant for before you use it. Please refer to these tutorials to understand how to use this plugin boilerplate

### Thanks to these people for their awesome tutorials and free boilerplates that helped me build this.
 * Thanks to [DevInvision](https://github.com/DevinVinson/Plugin-Directory-Boilerplate) which is what my boilerplate is built into.
 * Thanks to [Josh Pollock](https://joshpress.net/) for is amazing tutorials on [TorqueMag](https://torquemag.io). If you care to know how this boilerplate was made, please check out [JoshPollock Articles](https://torquemag.io/author/joshp/).

## Dependency
 * Composer - You need composer installed to use this boilerplate
 * Docker - This plugin uses docker because......well, Everyone use docker now and it's really cool and very much flexible. It also makes it easy to share development environments between Ubuntu, Windows and Mac.
 [Check out this nice article](https://www.infoworld.com/article/3310941/why-you-should-use-docker-and-containers.html) if you need more Information about the benefits of using docker.

## Installation Guide
Before using this boilerplate, You are to do the following;

1. Perform a global search for "PluginNameSpace" and replace it with the namespace of your plugin.

2. Also, do a global search for "plugin-name" and replace it with the name of your plugin.

3. Also, do a global search for "plugin_name" and replace it with the name of the plugin file.

4. Do a global search of "virtualhostname" and replace it with the virtualhost name you will prefer.

5. Find the file serving as the entry point of the plugin (plugin-name.php found in the root of this project) and change the name to the actual name of the plugin you are to create.

6. Then Run the command "composer dump-autoload"

HOORAY! Now, You're good to go. Happy Coding!
