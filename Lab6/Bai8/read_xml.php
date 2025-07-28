<?php
$xml_file = "contacts.xml";

if (file_exists($xml_file)) {
    $xml = simplexml_load_file($xml_file);

    if ($xml) {
        echo "<h2>Danh bạ liên hệ</h2>";
        echo "<ul>";

        foreach ($xml->contact as $contact) {
            $name = $contact->name;
            $email = $contact->email;
            $phone = $contact->phone;

            echo "<li><strong>$name:</strong> Email: $email, Phone: $phone</li>";
        }

        echo "</ul>";
    } else {
        echo "Không có dữ liệu trong tệp XML.";
    }
} else {
    echo "Tệp XML ($xml_file) không tồn tại.";
}
?>