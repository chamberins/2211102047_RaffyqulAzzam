import 'dart:convert';
import 'package:http/http.dart' as http;
import '../models/post_model.dart';

class ApiService {
  static Future<List<Post>> fetchPosts() async {
    final response = await http.get(
      Uri.parse('https://jsonplaceholder.typicode.com/posts'),
    );
    if (response.statusCode == 200) {
      List<dynamic> body = json.decode(response.body);
      return body.map((json) => Post.fromJson(json)).toList();
    } else {
      throw Exception("Gagal memuat data");
    }
  }
}
