{% extends 'email/templates/default.php' %}

{% block content %}
	<p>You have registered!</p>

	<p>Activate your accoutn using this link: {{ baseUrl }}{{ urlFor('activate') }}?email={{ user.email }}&identifier={{ identifier|url_encode }}</p>
{% endblock %}