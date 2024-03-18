# Scientific-Research
### Tác giả
Trần Phát Đạt (Chủ nhiệm đề tài), Đinh Tuấn Kiệt (Thành viên chính), Nguyễn Phú Cường (Thành viên chính), Nguyễn Ngọc Trâm (Thành viên chính), Văn Hoàng Hải Đăng (Thành viên)

### Tổng quan
Đề tài được nghiên cứu nhằm tạo ra một hệ thống học tập tiếng anh dựa trên giải thuật gợi ý để giới thiệu những tài liệu, bài ôn tập, bài thi phù hợp với người dùng. Nhằm hỗ trợ người dùng học tập Tiếng Anh một cách có hiệu quả.

### Công nghệ và giải thuật xây dựng hệ thống:
PHP framework: Laravel;
JavaScript Library: ReactJS;
Hệ quản trị CSDL: MySQL;
Giải thuật gợi ý (Collaborative recommendation systems).

### Thuật toán
Ý tưởng cơ bản của thuật toán này là dự đoán mức độ yêu thích của một user đối với một item dựa trên các users khác “gần giống” với user đang xét. Việc xác định độ “giống nhau” giữa các users có thể dựa vào mức độ quan tâm (rating) của các users này với các items khác mà hệ thống đã biết trong quá khứ.

Ví dụ: Hai người dùng A và B, đã hoàn thành hai bài thi Tiếng Anh có mã là De1 và De2, là các bài thi trung học phổ thông quốc gia. Cả hai người đều đã biết kết quả của các bài thi này và đạt được điểm số trong khoảng từ 6 đến 8 điểm cho mỗi bài thi.

Dựa trên thông tin về các bài thi đã làm của người dùng B, hệ thống nhận thấy rằng B đã hoàn thành một bài thi khác có mã là De3. Dựa trên sự tương tự trong trình độ học tập của B, có khả năng cao là người dùng A cũng sẽ quan tâm đến và sẽ làm bài thi tương tự như De3, bởi vì cả hai đều có trình độ tương đối gần nhau dựa trên điểm số của họ. Do đó, hệ thống có thể đề xuất cho người dùng A bài thi De3 dựa trên sự tương đồng về trình độ học tập và sự quan tâm của người dùng B đối với bài thi De3 này.

*Lưu đồ thiết kế giải thuật
![image](https://github.com/phatdattran2k2/Scientific-Research/assets/137701738/abe77d6b-a6c0-494d-a2b7-4aede4d85b74)
